<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class publicite extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('publicite_model','publiciteModel');
    }
    

    
    public function index() {
        $data['positions']=$this->publiciteModel->get_all_positions();
        $data['clients']=$this->publiciteModel->get_all_clients();
        $this->load->view('publicite_view',$data);
    }
    function read(){

        $result=$this->publiciteModel->get_all_publicites();
        echo json_encode(['data'=>$result]);


    }
    function activated(){
        $id = $this->uri->segment(3);
        $result = $this->publiciteModel->activate_publicite($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);

    }
    function desactivated(){
        $id = $this->uri->segment(3);
        $result = $this->publiciteModel->desactivate_publicite($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);

    }
    public function add() {

        if($_POST){
            $this->form_validation->set_rules('client_id', ' nom du client', 'trim|required|xss_clean');
            $this->form_validation->set_rules('publicite_nom', 'nom de la publicite', 'trim|required|xss_clean');
            $this->form_validation->set_rules('publicite_url', 'url de la publicite', 'trim|required|xss_clean');
            $this->form_validation->set_rules('publicite_date_debut', 'date de debut', 'trim|required|xss_clean');
            $this->form_validation->set_rules('publicite_date_fin', 'date de fin', 'trim|required|xss_clean');
            $this->form_validation->set_rules('position_id', 'nom de la position', 'trim|required|xss_clean');

            if ($this->form_validation->run()) {
                $position=$this->publiciteModel->get_all_publicites($this->input->post('position_id'));
                $config['upload_path'] = './uploads/publicites/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']  = '10000';
                $config['max_width']  = $position->pub_position_longueur;
                $config['max_height']  = $position->pub_position_largeur;
                $config['file_name'] = date("Y_m_d_H_i_s_").rand();

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload()){
                    $this->session->set_flashdata('img_error',$this->upload->display_errors());

                    redirect('publicite');
                }
                else{
                    $fichier = $this->upload->data();

                    $data = array(
                        'publicite_nom' => $this->input->post('publicite_nom'),
                        'publicite_date_debut' => date('Y-m-d', strtotime($this->input->post('publicite_date_debut'))).'-'.date('H-i-s'),
                        'publicite_date_fin' => date('Y-m-d', strtotime($this->input->post('publicite_date_fin'))).'-'.date('H-i-s'),
                        'publicite_url' => $this->input->post('publicite_url'),
                        'position_id' => $this->input->post('position_id'),
                        'client_id' => $this->input->post('client_id'),
                        'publicite_image' => $fichier['file_name'],
                        'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                    );
                    thumb($fichier['full_path'],50,50,"./uploads/publicites/thumbs/50x50_". $fichier['file_name']);

                    $this->publiciteModel->add_publicite($data);
                    $this->session->set_flashdata('state', 'success');
                    redirect('publicite');

                }

            } else {
                $this->session->set_flashdata('img_error',validation_errors());
                $this->load->view('publicite_view');

            }


        }else{
            $this->load->view('position_view');

        }


    }

    public function position() {

        if($_POST){
            $this->form_validation->set_rules('position_nom', ' nom', 'trim|required|xss_clean');
            $this->form_validation->set_rules('position_desc', 'description', 'trim|required|xss_clean');
            $this->form_validation->set_rules('position_longueur', 'longueur', 'trim|required|xss_clean');
            $this->form_validation->set_rules('position_largeur', 'largeur', 'trim|required|xss_clean');

            if ($this->form_validation->run()) {
                $longueur=$this->input->post('position_longueur');
                $largeur=$this->input->post('position_largeur');
                $config['upload_path'] = './uploads/publicites/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']  = '10000';
                $config['max_width']  = $longueur;
                $config['max_height']  = $largeur;
                $config['file_name'] = date("Y_m_d_H_i_s_").rand();

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload()){
                    $this->session->set_flashdata('img_error',$this->upload->display_errors());

                    redirect('publicite/position');
                }
                else{
                    $fichier = $this->upload->data();

                    $data = array(
                        'pub_position_nom' => $this->input->post('position_nom'),
                        'pub_position_desc' => $this->input->post('position_desc'),
                        'pub_position_url' => $this->input->post('position_url'),
                        'pub_position_longueur' => $this->input->post('position_longueur'),
                        'pub_position_largeur' => $this->input->post('position_largeur'),
                        'pub_position_image' => $fichier['file_name'],
                        'utilisateur_id'=> $this->session->userdata('utilisateur_id')
                    );
                    thumb($fichier['full_path'],313,157,"./uploads/publicites/thumbs/313x157_". $fichier['file_name']);

                    $this->publiciteModel->add_position($data);
                    $this->session->set_flashdata('state', 'success');
                    redirect('publicite/position');

                }

            } else {
             $this->load->view('position_view');
               // echo validation_errors();

            }


        }else{
            $this->load->view('position_view');

        }


    }

    function position_read(){

        $result=$this->publiciteModel->get_all_positions();
        echo json_encode(['data'=>$result]);


    }
    function position_delete(){
        $id = $this->uri->segment(4);
        $result = $this->clientModel->delete_client($id);
        $strMessage ='deleted';
        $this->session->set_clientdata("success", $strMessage);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }
    




}
