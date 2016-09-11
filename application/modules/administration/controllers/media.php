<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class media extends MX_Controller {

    function __construct() {
        parent::__construct();
        logged_in();
        $this->load->model('media_model','mediaModel');
    }
    

    
    public function index() {

        $this->load->view('media_view');
    }

    function category(){
        $this->load->view('media_category_view');
    }

    function add_category(){
       if($_POST){
           $this->form_validation->set_rules('titre', ' Titre de l \'album', 'trim|required|xss_clean');
           $this->form_validation->set_rules('date', ' date ', 'trim|required|xss_clean');
           if($this->form_validation->run()){

               $data=array('media_category_titre'=>$this->input->post('titre'),
                           'media_category_desc'=>$this->input->post('resume'),
                           'media_category_date'=>date('Y-m-d', strtotime($this->input->post('date'))),
                           );

               $this->mediaModel->add_category($data);
               $this->session->set_flashdata('state', 'success');
               redirect('administration/media/category');
           }
       }else{
           $this->load->view('media_category_view');
       }

    }


    function add_media($id=null){
        if($_POST){
            $this->form_validation->set_rules('titre_video', ' Titre de video', 'trim|xss_clean');
            $this->form_validation->set_rules('titre_photo', ' Titre de photo', 'trim|xss_clean');
            $this->form_validation->set_rules('lien_video', 'Lien de la video', 'trim|xss_clean');



            if ($this->form_validation->run()) {
                $data=array();
                $type=$this->input->post('media_type');
                $cat=$this->input->post('category_id');
                $config['upload_path'] = './uploads/medias/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']  = '1000';
                $config['max_width']  = '2000';
                $config['max_height']  = '2000';
                $config['file_name'] = date("Y_m_d_H_i_s_").rand();
                $this->load->library('upload', $config);
                  if($type=='photo'){

                      if ( ! $this->upload->do_upload(image_photo)){
                          $this->session->set_flashdata('img_error',$this->upload->display_errors());

                          redirect('administration/media/add_media/'.$cat);
                      }else{

                          $fichier = $this->upload->data();
                          $data=array('media_titre'=>$this->input->post('titre_photo'),
                              'media_image'=>$this->input->post('titre_photo'),
                              'media_type'=>$this->input->post('media_type'),
                              'media_image'=>$fichier['file_name'],
                              'media_slug'=>$this->symfony_helper->urlize($this->input->post('titre_photo')),
                              'media_category_id'=>$this->input->post('category_id'),

                          );
                          $this->mediaModel->add_media($data);
                          redirect('administration/media/add_media/'.$cat);
                      }



                  }else{
                      if ( ! $this->upload->do_upload(image_video)){
                          $this->session->set_flashdata('img_error',$this->upload->display_errors());

                          redirect('administration/media/add/'.$cat);
                      }else{

                          $fichier = $this->upload->data();
                          $data=array('media_titre'=>$this->input->post('titre_photo'),
                              'media_lien'=>$this->input->post('lien_video'),
                              'media_type'=>$this->input->post('media_type'),
                              'media_image'=>$fichier['file_name'],
                              'media_slug'=>$this->symfony_helper->urlize($this->input->post('titre_video')),
                              'media_category_id'=>$this->input->post('category_id'),

                          );
                          $this->mediaModel->add_media($data);
                          $this->session->set_flashdata('state', 'success');
                          redirect('administration/media/add_media/'.$cat);
                      }


                  }

                $this->mediaModel->add_media($data);
             redirect('administration/media');

            }
            else {
                $this->load->view('media_view');
               // echo 'validation error';
            }


        }else{
            $data['category_id']=$id;
            $this->load->view('add_media_view',$data);
        }



    }
    public function edit(){
        $data=array();


        if($_POST){
            $this->form_validation->set_rules('titre_actualite', ' Titre', 'trim|required|xss_clean');
            $this->form_validation->set_rules('contenu_actualite', 'Contenu', 'trim|required|xss_clean');
            $this->form_validation->set_rules('source_actualite', 'Source', 'trim|xss_clean');
            $this->form_validation->set_rules('date_ajout_actualite', 'Date', 'trim|required|xss_clean');
            if ($this->form_validation->run()) {

                if($this->form_validation->set_rules('userfile', 'Image', 'trim|required|xss_clean')){
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']  = '1000';
                    $config['max_width']  = '1000';
                    $config['max_height']  = '1000';
                    $config['file_name'] = date("Y_m_d_H_i_s_").rand();

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload()) {
                        $this->session->set_flashdata('img_error',$this->upload->display_errors());
                        $this->load->view('edit_actualite_view',$data);

                    }else{

                        $this->load->library('upload', $config);
                        $fichier = $this->upload->data();
                        $data['actualite_image']= $fichier['file_name'];
                        thumb($fichier['full_path'],313,157,"./uploads/thumbs/313x157_". $fichier['file_name']);
                        $data = array(
                            'actualite_titre' => $this->input->post('titre_actualite'),
                            'actualite_contenu' => $this->input->post('contenu_actualite'),
                            'actualite_source' => $this->input->post('source_actualite'),
                            'actualite_image'=>$fichier['file_name'],
                            'actualite_ajout_date' => date('Y-m-d', strtotime($this->input->post('date_ajout_actualite'))),
                            'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                        );
                        $id= $this->input->post('id_actualite');
                        $this->actualiteModel->update_actualite($data,$id);
                        $this->session->set_flashdata('state', 'success');
                      redirect('actualite');
                    }

                }else{
                    $data = array(
                        'actualite_titre' => $this->input->post('titre_actualite'),
                        'actualite_contenu' => $this->input->post('contenu_actualite'),
                        'actualite_source' => $this->input->post('source_actualite'),
                        'actualite_ajout_date' => date('Y-m-d', strtotime($this->input->post('date_ajout_actualite'))),
                        'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                    );
                    $id= $this->input->post('id_actualite');
                    $this->actualiteModel->update_actualite($data,$id);
                    $this->session->set_flashdata('state', 'success');
                    redirect('actualite');




            }
            }

        }else{
            $id = $this->uri->segment(4);
            $data['actualite']=$this->actualiteModel->get_actualite($id);
            $this->load->view('edit_actualite_view',$data);
        }



    }
    function read_category(){

        $result=$this->mediaModel->get_all_categories();
        echo json_encode(['data'=>$result]);


    } function read_medias(){

        $result=$this->mediaModel->get_all_medias();
        echo json_encode(['data'=>$result]);


    }

    function delete(){
        $id = $this->uri->segment(4);
        $result = $this->mediaModel->delete_media($id);
        $strMessage ='deleted';
        $this->session->set_flashdata("success", $strMessage);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }
    function activated(){
        $id = $this->uri->segment(4);
        $result = $this->mediaModel->activate_media($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);

    }

    function modifier(){
        $id = $this->uri->segment(3);

        $this->utilisateurModel->update_user($id);
        redirect('utilisateur');
    }
    function read_by_id($id=null){
        $result = $this->mediaModel->get_media($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }
}
