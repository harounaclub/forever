<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

    public function __construct()
    {
        parent::__construct();

        //$this->load->model('test_model');
        $this->load->library(array('verifieAuthentification'));
         $this->verifieauthentification->check_login($this->session->userdata('logIn'));
         $this->load->library(array('form_validation','session'));
         $this->load->helper(array('form','html'));
        
        
    }

    public function index()
    { 

        $this->load->view('index_view'); 
    }


    public function header()
    {
        
        $this->load->view('header_view'); 
    }

    public function sidebar()
    {
        
        $this->load->view('sidebar_view'); 
    }


    public function footer()
    {
        
        $this->load->view('footer_view'); 
    }

}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 