<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class quizz extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('quizz_model','quizzModel');
    }
    

    
    public function index() {
        $data['pub1']=publicite1();
        $data['actualites']=$this->quizzModel->get_all_actualites();
        $data['videos']=$this->quizzModel->get_all_videos();
        $data['video_une']=$this->quizzModel->get_video_une();
        $data['flashs']=$this->quizzModel->get_all_flashs();




        $this->load->view('quizz_view',$data);

    }




    function user_list(){

        $result = $this->userModel->get_all_users();
        echo json_encode(['data'=>$result]);
    }

}
