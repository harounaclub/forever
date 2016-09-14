<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        

         
        
        $data["main_content"]="dashboard_view";
        $this->load->view('index_view',$data); 
    }

}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 