<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Importation extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('upload','form_validation'));
        $this->load->helper(array('form','html','url'));
    }

    public function index()
    {
        

         
        
        $data["main_content"]="importation_view";
        $this->load->view('index_view',$data); 
    }


    function excel_read(){



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
        

       

		echo "<pre>";

		print_r($arr_data);

		echo "</pre>";

		


		echo count($arr_data);

		redirect("login");




		



      
		
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