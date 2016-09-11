<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class actualite extends MX_Controller {

    function __construct() {
        parent::__construct();
        logged_in();
        $this->load->model('actualite_model','actualiteModel');
    }
    

    
    public function index() {

        $this->load->view('actualite_view');
    }

    function add(){

        if($_POST){
            $this->form_validation->set_rules('titre_actualite', ' Titre', 'trim|required|xss_clean');
             $this->form_validation->set_rules('contenu_actualite', 'Contenu', 'trim|required|xss_clean');
              $this->form_validation->set_rules('source_actualite', 'Source', 'trim|required|xss_clean');
              $this->form_validation->set_rules('date_ajout_actualite', 'Date', 'trim|required|xss_clean');

            if ($this->form_validation->run()) {

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']  = '1000';
                $config['max_width']  = '2000';
                $config['max_height']  = '2000';
                $config['file_name'] = date("Y_m_d_H_i_s_").rand();

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload()){
                    $this->session->set_flashdata('img_error',$this->upload->display_errors());

                    redirect('administration/actualite/add');
                }
                else{
                    $fichier = $this->upload->data();

                    $data = array(
                        'actualite_titre' => $this->input->post('titre_actualite'),
                        'actualite_contenu' => $this->input->post('contenu_actualite'),
                        'actualite_source' => $this->input->post('source_actualite'),
                        'actualite_image' => $fichier['file_name'],
                        'actualite_ajout_date' => date('Y-m-d', strtotime($this->input->post('date_ajout_actualite'))),
                        'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                    );
                     thumb($fichier['full_path'],313,157,"./uploads/thumbs/313x157_". $fichier['file_name']);
                    thumb($fichier['full_path'],1600,800,"./uploads/actualites/". $fichier['file_name']);
                    $this->actualiteModel->add_Actualite($data);
                    $this->session->set_flashdata('state', 'success');
                    redirect('administration/actualite/add');

                }

            } else {
                $this->load->view('add_actualite_view');
            }


        }else{
            $this->load->view('add_actualite_view');

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

                if(!isset($_FILES['userfile']) || $_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE){
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
                    redirect('administration/actualite');

                }else{
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']  = '1000';
                    $config['max_width']  = '2000';
                    $config['max_height']  = '2000';
                    $config['file_name'] = date("Y_m_d_H_i_s_").rand();

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload()) {
                        $data['img_error']=$this->upload->display_errors();
                        $id = $id= $this->input->post('id_actualite');
                        $data['actualite']=$this->actualiteModel->get_actualite($id);
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
                        redirect('administration/actualite');
                    }





                }
            }else{

            }

        }else{
            $id = $this->uri->segment(4);
            $data['actualite']=$this->actualiteModel->get_actualite($id);
            $this->load->view('edit_actualite_view',$data);
        }



    }
    function read(){
        $result=$this->actualiteModel->get_all_actualites();
        echo json_encode(['data'=>$result]);


    }
    function delete(){
        $id = $this->uri->segment(4);
        $result = $this->actualiteModel->delete_actualite($id);
        $strMessage ='deleted';
        $this->session->set_flashdata("success", $strMessage);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }
    function activated(){
        $id = $this->uri->segment(4);
        $result = $this->actualiteModel->activate_video($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);

    }
    function desactivated(){
        $id = $this->uri->segment(4);
        $result = $this->actualiteModel->desactivate_video($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);

    }
}
