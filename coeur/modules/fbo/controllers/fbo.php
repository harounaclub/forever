<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fbo extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('upload','form_validation'));
        $this->load->helper(array('form','html','url'));

        $this->load->model('fbo_model');
    }

    public function index()
    {
        

        $data["list_fbo"]=$this->fbo_model->get_fichier_importer_infos();

        
        $data["main_content"]="liste_fbo_view";
        $this->load->view('index_view',$data);


    }


    function liste_transaction($code_transaction){


    	$list_fbo_by_code=$this->fbo_model->get_fbo_infos($code_transaction);
    	$data["code_transaction"]=$code_transaction;

    	foreach ($list_fbo_by_code as $value) {

    		
    		$data["nom_prenom"]=$value->nom_prenom;
    		# code...
    	}


    	
    	$list_fbo_resume=$this->fbo_model->get_resume_fbo_bycode($code_transaction);
    	foreach ($list_fbo_resume as $value) {

    		$data["solde"]=$value->apayer;
    		$data["credit"]=$value->credit;
    		
    	}

    	$data["list_transaction_fbo_by_code"]=$this->fbo_model->get_transactionfbo_infos($code_transaction);


    	 $data["main_content"]="liste_fbo_transaction_view";
        $this->load->view('index_view',$data);
    	

    	



    }

     function credit($code_transaction){


    	$list_fbo_by_code=$this->fbo_model->get_fbo_infos($code_transaction);
    	$data["code_transaction"]=$code_transaction;

    	foreach ($list_fbo_by_code as $value) {

    		
    		$data["nom_prenom"]=$value->nom_prenom;
    		# code...
    	}


    	
    	$list_fbo_resume=$this->fbo_model->get_resume_fbo_bycode($code_transaction);
    	foreach ($list_fbo_resume as $value) {

    		$data["solde"]=$value->apayer;
    		$data["credit"]=$value->credit;
    		
    	}

    	$data["list_transaction_fbo_by_code"]=$this->fbo_model->get_transactionfbo_infos($code_transaction);


    	 $data["main_content"]="demande_credit_view";
        $this->load->view('index_view',$data);
    	

    	



    }

    function ajout_credit(){


    	
    	
        $code_transaction=$this->input->post('code_transaction');
        $montant=$this->input->post('montant_credit');
        $motif=$this->input->post('motif');


        $data_credit_fbo=array(

					'code_distributeur' =>$code_transaction,
					'montant_credit' =>$montant,
					'motif' =>$motif,
					

					);


       $this->fbo_model->add_credit_fbo($data_credit_fbo);

        $data_credit_fbo_u=array(
								
								'credit' =>$montant,	

								);

		$this->fbo_model->update_resume_fbo($code_transaction,$data_credit_fbo_u);

		$data["montant_final"]=$montant;
		$data["motif"]=$motif;


    	
        $this->load->view('facture_view',$data);
    	

    	



    }


    function facture(){


    	 $this->load->view('facture_view');



    }







}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 