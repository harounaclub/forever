<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class bibliotheque extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('bibliotheque_model','bibliothequeModel');
    }
    

    
    public function index() {
        $data['pub1']=publicite1();
        $data['actualites']=$this->bibliothequeModel->get_all_actualites();
        $data['videos']=$this->bibliothequeModel->get_all_videos();
        $data['video_une']=$this->bibliothequeModel->get_video_une();
        $data['flashs']=$this->bibliothequeModel->get_all_flashs();




        $this->load->view('bibliotheque_view',$data);

    }




    function user_list(){

        $result = $this->userModel->get_all_users();
        echo json_encode(['data'=>$result]);
    }

}
