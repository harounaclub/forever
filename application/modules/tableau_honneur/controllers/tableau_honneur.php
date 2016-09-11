<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class tableau_honneur extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('tableau_honneur_model','tableau_honneurModel');
    }
    

    
    public function index() {
        $data['pub1']=publicite1();
        $data['actualites']=$this->tableau_honneurModel->get_all_actualites();
        $data['videos']=$this->tableau_honneurModel->get_all_videos();
        $data['video_une']=$this->tableau_honneurModel->get_video_une();
        $data['flashs']=$this->tableau_honneurModel->get_all_flashs();




        $this->load->view('tableau_honneur_view',$data);

    }




    function user_list(){

        $result = $this->userModel->get_all_users();
        echo json_encode(['data'=>$result]);
    }

}
