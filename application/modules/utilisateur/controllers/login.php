<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('utilisateur_model','utilisateurModel');
        //$this->load->module('template');
        header('Access-Control-Allow-Origin: *');
        $this->load->model('login_model','loginModel');
    }
    


    
    public function index() {

        $this->load->view('login');
    }
    
    public function authentification() {
       
        $result=$this->loginModel->check_user();
        echo $result;
       
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('utilisateur/login');
    }
    

}
