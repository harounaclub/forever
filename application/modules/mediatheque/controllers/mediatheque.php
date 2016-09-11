<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class mediatheque extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mediatheque_model','mediathequeModel');
    }
    

    
    public function index() {
        $data['pub1']=publicite1();
        $data['actualites']=$this->mediathequeModel->get_all_actualites();
        $data['videos']=$this->mediathequeModel->get_all_videos();
        $data['video_une']=$this->mediathequeModel->get_video_une();
        $data['flashs']=$this->mediathequeModel->get_all_flashs();
        $data['albums']=$this->mediathequeModel->get_all_medias();

       $this->load->view('mediatheque_view',$data);

    }

   public  function album_photo($slug=null){

       $data['pub1']=publicite1();
       $data['actualites']=$this->mediathequeModel->get_all_actualites();
       $data['videos']=$this->mediathequeModel->get_all_videos();
       $data['video_une']=$this->mediathequeModel->get_video_une();
       $data['flashs']=$this->mediathequeModel->get_all_flashs();
       $data['album']=$this->mediathequeModel->get_album_photo($slug);

       $this->load->view('album_photo_view',$data);

   }




}
