<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class actualite extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('accueil/accueil_model','accueilModel');
        $this->load->model('actualite_model','actualiteModel');
        $this->load->library('pagination');

    }



    public function index() {

        $data['pub1']=publicite1();
        $data['videos']=$this->accueilModel->get_all_videos();
        $data['video_une']=$this->accueilModel->get_video_une();
        $data['flashs']=$this->accueilModel->get_all_flashs();



        $config = array();
        $config["base_url"] = base_url() . "actualite/index";
        $total_row = $this->actualiteModel->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Suivant';
        $config['prev_link'] = 'Precedent';

        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
        }
        else{
            $page = 1;
        }
        $data['actualites']= $this->actualiteModel->fetch_data($config["per_page"], $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );
//         var_dump($data['actualites']);
         $this->load->view('actualite_view',$data);

    }




    function details($slug){
        $data['pub1']=publicite1();
        $data['videos']=$this->accueilModel->get_all_videos();
        $data['video_une']=$this->accueilModel->get_video_une();
        $data['flashs']=$this->accueilModel->get_all_flashs();
       $slug=$this->uri->segment(3);
        $data['actualite']=$this->actualiteModel->get_actualite_by_slug($slug);

        $this->load->view('actualite_details_view',$data);

    }

}
