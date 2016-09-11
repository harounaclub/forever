<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class librairie extends MX_Controller {

    function __construct() {
        parent::__construct();
        logged_in();
        $this->load->model('librairie_model','librairieModel');
    }
    

    
    public function index() {

        $this->load->view('librairie_view');
    }

    function add(){


        if($_POST){
            $this->form_validation->set_rules('librairie_nom', ' Nom de la  librairie', 'trim|required|xss_clean');
            $this->form_validation->set_rules('librairie_contenu', 'Contenu de la librairie', 'trim|required|xss_clean');
            $this->form_validation->set_rules('librairie_phone', 'Numero du librairie', 'trim|required|xss_clean');
            $this->form_validation->set_rules('date_ajout_librairie', 'Date', 'trim|required|xss_clean');

            if ($this->form_validation->run()) {

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']  = '1000';
                $config['max_width']  = '200';
                $config['max_height']  = '180';
                $config['file_name'] = date("Y_m_d_H_i_s_").rand();

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload()){
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                     redirect('administration/librairie/add');
                }
                else{
                    $fichier = $this->upload->data();

                    $data = array(
                        'librairie_nom' => $this->input->post('librairie_nom'),
                        'librairie_phone' => $this->input->post('librairie_phone'),
                        'librairie_contenu' => $this->input->post('librairie_contenu'),
                        'librairie_logo' => $fichier['file_name'],
                        'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                    );
                    thumb($fichier['full_path'],50,50,"./uploads/librairies/thumbs/50x50_". $fichier['file_name']);

                    $this->librairieModel->add_librairie($data);
                    $this->session->set_flashdata('state', 'success');
                    redirect('administration/librairie/add');

                }

            } else {
                $this->session->set_flashdata('error',validation_errors());
                $this->load->view('add_librairie_view');
            }


        }else{
            $this->load->view('add_librairie_view');

        }



    }
    public function edit(){
        $data=array();


        if($_POST){
            $this->form_validation->set_rules('librairie_nom', ' Nom de la  librairie', 'trim|required|xss_clean');
            $this->form_validation->set_rules('librairie_contenu', 'Contenu de la librairie', 'trim|required|xss_clean');
            $this->form_validation->set_rules('librairie_phone', 'Numero du librairie', 'trim|required|xss_clean');
            if ($this->form_validation->run()) {
                if(!isset($_FILES['userfile']) || $_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE){

                    $data = array(
                        'librairie_nom' => $this->input->post('librairie_nom'),
                        'librairie_phone' => $this->input->post('librairie_phone'),
                        'librairie_contenu' => $this->input->post('librairie_contenu'),
                        'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                    );
                    $id= $this->input->post('librairie_id');
                    $this->librairieModel->update_librairie($data,$id);
                    $this->session->set_flashdata('state', 'success');
                    redirect('administration/librairie');
                }else{
                    $config['upload_path'] = './uploads/librairies/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']  = '1000';
                    $config['max_width']  = '200';
                    $config['max_height']  = '180';
                    $config['file_name'] = date("Y_m_d_H_i_s_").rand();

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload()) {
                        $this->session->set_flashdata('error',$this->upload->display_errors());

                        $data['librairie']=$this->librairieModel->get_librairie($this->input->post('librairie_id'));

                        $this->load->view('edit_librairie_view',$data);

                    }else{

                        $this->load->library('upload', $config);
                        $fichier = $this->upload->data();
                        $data['librairie_logo']= $fichier['file_name'];
                        thumb($fichier['full_path'],50,50,"./uploads/thumbs/50x50_". $fichier['file_name']);
                        $data = array(
                            'librairie_nom' => $this->input->post('librairie_nom'),
                            'librairie_phone' => $this->input->post('librairie_phone'),
                            'librairie_contenu' => $this->input->post('librairie_contenu'),
                            'librairie_logo' => $fichier['file_name'],
                            'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                        );
                        $id= $this->input->post('librairie_id');
                        $this->librairieModel->update_librairie($data,$id);
                        $this->session->set_flashdata('state', 'success');
                        redirect('librairie');
                    }





                }

            }else{

                $this->session->set_flashdata('error',validation_errors());

                $data['librairie']=$this->librairieModel->get_librairie($this->input->post('librairie_id'));

                $this->load->view('edit_librairie_view',$data);

            }


        }else{
            $id = $this->uri->segment(4);
            $data['librairie']=$this->librairieModel->get_librairie($id);
            $this->load->view('edit_librairie_view',$data);
        }



    }
    function read(){

        $result=$this->librairieModel->get_all_librairies();
        echo json_encode(['data'=>$result]);


    }
    function delete(){
        $id = $this->uri->segment(4);
        $result = $this->librairieModel->delete_librairie($id);
        $strMessage ='deleted';
        $this->session->set_librairiedata("success", $strMessage);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }


}
