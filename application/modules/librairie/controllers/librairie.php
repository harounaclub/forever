<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class librairie extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('librairie_model','librairieModel');
    }
    

    
    public function index() {
        $data['pub1']=publicite1();
        $data['actualites']=$this->librairieModel->get_all_actualites();
        $data['videos']=$this->librairieModel->get_all_videos();
        $data['video_une']=$this->librairieModel->get_video_une();
        $data['flashs']=$this->librairieModel->get_all_flashs();




        $this->load->view('librairie_view',$data);

    }




    function user_list(){

        $result = $this->userModel->get_all_users();
        echo json_encode(['data'=>$result]);
    }

}
