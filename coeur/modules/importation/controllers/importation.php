<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Importation extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('upload','form_validation'));
        $this->load->helper(array('form','html','url'));

        $this->load->model('importation_model');
    }

    public function index()
    {
        

        $data["list_fichier_importer"]=$this->importation_model->get_fichier_importer_infos();

        
        $data["main_content"]="importation_bonus_view";
        $this->load->view('index_view',$data);


    }


    public function croisement_banque()
    {
        

         
        
        $data["main_content"]="importation_banque_view";
        $this->load->view('index_view',$data); 
    }


    function lecture_bonus(){



    	if (!empty($_FILES)) {
        $tempFile = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $targetPath = getcwd() . '/uploads/';
        $targetFile = $targetPath . $fileName ;
        move_uploaded_file($tempFile, $targetFile);
        // if you want to save in db,where here
        // with out model just for example
        // $this->load->database(); // load database
        // $this->db->insert('file_table',array('file_name' => $fileName));
        }  


    	$file = './uploads/'.$fileName;
		//load the excel library
		$this->load->library('excel');
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
		//send the data in an array format
		//$data['header'] = $header;
		$data['values'] = $arr_data;
		$nbre_fbo_apayer=count($arr_data);


		//echo $fileName;
		$filename_prefix=substr($fileName, 0,6);
		

		if($filename_prefix=="bonus_"){

			if($this->importation_model->check_fichier_existe($fileName)){



				echo "fichier existe deja";



			}else{

						$data_fichier_importer=array(
								'nom_fichier' =>$fileName,
								'nbre_distributeur' =>$nbre_fbo_apayer - 4,
								'numero_mois' =>date("m"),				

								);
					$id_fichier_a_importer=$this->importation_model->add_fichier_importer($data_fichier_importer);


					for ($i=5; $i < $nbre_fbo_apayer ; $i++) { 
						

						// 1.Verifier si le code distribution existe

						$code_distributeur=$arr_data[$i]["B"];
						$nom_prenom=$arr_data[$i]["C"];
							$montant_bonus=$arr_data[$i]["D"];
							$ajustements=$arr_data[$i]["E"];
							$sous_total=$arr_data[$i]["F"];
							$bic=$arr_data[$i]["G"];
							$apayer=$arr_data[$i]["H"];
						if($this->importation_model->check_fbo_infos($code_distributeur)){


							$list_fbo=$this->importation_model->get_fbo_infos($code_distributeur);
							foreach ($list_fbo as $infos) {


								$id_fbo=$infos->id_fbo;
								
							}


							if(is_null($bic )){

								$bic="";
							}

							$data_transaction=array(
								'id_fbo' =>$id_fbo,
								'code_distributeur' =>$code_distributeur,
								'montant_bonus' =>$montant_bonus,
								'ajustements' =>$ajustements,
								'sous_total' =>$sous_total,
								'bic' =>$bic,
								'apayer' =>$apayer,
								'numero_mois' =>date("m"),
								'id_fichier' =>$id_fichier_a_importer,

								);
							$this->importation_model->add_transaction($data_transaction);


							$list_resume_fbo=$this->importation_model->get_resume_fbo_bycode($code_distributeur);
							foreach ($list_resume_fbo as $infos) {


								$infos_a_payer=$infos->apayer;
								
							}

							$montant_a_jour=$infos_a_payer+$apayer;
							$data_resume_fbo_u=array(
								
								'apayer' =>$montant_a_jour,	

								);

							$this->importation_model->update_resume_fbo($code_distributeur,$data_resume_fbo_u);





						}else{

							

							$data_fbo=array(
								'code_distributeur' =>$code_distributeur,
								'nom_prenom' =>$nom_prenom,
								);

							$id_fbo=$this->importation_model->add_fbo($data_fbo);

							// 2. enregistrement de la transaction

							if(is_null($bic )){

								$bic="";
							}

							$data_transaction=array(
								'id_fbo' =>$id_fbo,
								'code_distributeur' =>$code_distributeur,
								'montant_bonus' =>$montant_bonus,
								'ajustements' =>$ajustements,
								'sous_total' =>$sous_total,
								'bic' =>$bic,
								'apayer' =>$apayer,
								'numero_mois' =>date("m"),
								'id_fichier' =>$id_fichier_a_importer,

								);
							$this->importation_model->add_transaction($data_transaction);

							$data_resume_fbo=array(
								'code_distributeur' =>$code_distributeur,
								'apayer' =>$apayer,
								

								);
							$this->importation_model->add_resume_fbo($data_resume_fbo);


						}



					}

			}



			

		

	    }else{


	    	echo "erreur format fichier";
	    }

		


      
		
	}

	function actualise_fbo_info_banque(){


		$list_compte_fbo=$this->importation_model->get_fbo_infos_banque();
		foreach ($list_compte_fbo as $value) {


			$code_distributeur=$value->code_distributeur;
			$numero_compte=$value->numero_compte;
			if($this->importation_model->check_fbo_infos($code_distributeur)){

				$data_compte_bancaire=array(

					
					'numero_compte' =>$numero_compte,
					

				);

                $this->importation_model->update_infos_fbo($code_distributeur,$data_compte_bancaire);

                echo "information banque mise a jour";

			}
			
		}

		redirect("importation");


	}

	function chargement_info_banque(){



    	if (!empty($_FILES)) {
        $tempFile = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $targetPath = getcwd() . '/uploads/';
        $targetFile = $targetPath . $fileName ;
        move_uploaded_file($tempFile, $targetFile);
        // if you want to save in db,where here
        // with out model just for example
        // $this->load->database(); // load database
        // $this->db->insert('file_table',array('file_name' => $fileName));
        }  


    	$file = './uploads/'.$fileName;
		//load the excel library
		$this->load->library('excel');
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
		//send the data in an array format
		//$data['header'] = $header;
		$data['values'] = $arr_data;
		$nbre_fbo_apayer=count($arr_data);

       /*
		echo "<pre>";
		print_r($arr_data);
		echo "</pre>";
        */
		
		echo $nbre_fbo_apayer;

		for ($i=2; $i < $nbre_fbo_apayer ; $i++) { 


			$code_distributeur=$arr_data[$i]["A"];
			$numero_compte=$arr_data[$i]["B"];


			if(is_null($code_distributeur)){

					$code_distributeur="";
				}
			if(is_null($numero_compte)){

					$numero_compte="";
				}


			$data_compte_bancaire=array(

					'code_distributeur' =>$code_distributeur,
					'numero_compte' =>$numero_compte,
					

					);
				$this->importation_model->add_compte_bancaire($data_compte_bancaire);
			# code...
		}

		


      
		
	}


	function upload(){

		 $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('upload_success', $data); 
         } 
	}




}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 