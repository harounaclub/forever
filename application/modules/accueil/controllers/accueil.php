<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class accueil extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('accueil_model','accueilModel');
    }
    

    
    public function index() {
        $data['pub1']=publicite1();
        $data['actualites']=$this->accueilModel->get_all_actualites();
        $data['videos']=$this->accueilModel->get_all_videos();
        $data['video_une']=$this->accueilModel->get_video_une();
        $data['flashs']=$this->accueilModel->get_all_flashs();
        $data['actualites_une']=$this->accueilModel->get_actualites_une();



        $this->load->view('accueil_view',$data);

    }




    function user_list(){

        $result = $this->userModel->get_all_users();
        echo json_encode(['data'=>$result]);
    }

}
