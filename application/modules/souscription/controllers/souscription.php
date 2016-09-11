<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class souscription extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('souscription_model','souscriptionModel');
    }
    

    
    public function index() {
        $data['pub1']=publicite1();
        $data['actualites']=$this->souscriptionModel->get_all_actualites();
        $data['videos']=$this->souscriptionModel->get_all_videos();
        $data['video_une']=$this->souscriptionModel->get_video_une();
        $data['flashs']=$this->souscriptionModel->get_all_flashs();




        $this->load->view('souscription_view',$data);

    }




    function user_list(){

        $result = $this->userModel->get_all_users();
        echo json_encode(['data'=>$result]);
    }

}
