<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class administration extends MX_Controller {

    function __construct() {
        parent::__construct();

        logged_in();

    }
    

    
    public function index() {

        $this->load->view('index');
    }
    



}
