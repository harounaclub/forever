<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateur extends MX_Controller {

    function __construct() {
        parent::__construct();
        logged_in();
        $this->load->model('utilisateur_model','utilisateurModel');


    }
    

    
    public function index() {

        $this->load->view('utilisateur_view');
    }

    function create() {

        $result = array();
          if($_POST){
              $this->form_validation->set_rules('nom', "nom d'utilisateur", 'xss_clean|trim|required|max_length[100]|callback_checkUpperCase');
              $this->form_validation->set_rules('prenoms', "prenoms d'utilisateur", 'xss_clean|trim|required|max_length[100]|callback_checkUpperCase');
              $this->form_validation->set_rules('email', "email d'utilisateur", 'xss_clean|trim|required|max_length[100]');
              $this->form_validation->set_rules('password', "mot de passe ", 'xss_clean|trim|required|max_length[225]');
              $this->form_validation->set_rules('password_confirm', "mot de passe comfirmer ", 'xss_clean|trim|required|matches[password]');
              $this->form_validation->set_rules('numero', "numero d'utilisateur", 'xss_clean|trim|required|max_length[100]');
              $this->form_validation->set_rules('login', "login d'utilisateur", 'xss_clean|trim|required|max_length[100]');
              if($this->form_validation->run()!== True){

              }else{

                  $this->utilisateurModel->add_utilisateur();
                  $strMessage ='created';
                  $this->session->set_flashdata("success", $strMessage);
                  redirect('utilisateur');
              }

          }else{

              redirect('utilisateur');
          }


    }

    function read(){
         $result=$this->utilisateurModel->get_all_utilisateurs();
        echo json_encode(['data'=>$result]);


    }

    function update($id,$data){
        $this->db->where('id_utilisateur', $id);
        $this->db->update('utilisateurs',$data);
        return true;
    }

    function delete(){
        $id = $this->uri->segment(3);
        $result = $this->utilisateurModel->delete_utilisateur($id);
        $strMessage ='deleted';
        $this->session->set_flashdata("success", $strMessage);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }

    function activer(){
        $id = $this->uri->segment(3);
        $result = $this->utilisateurModel->activate_utilisateur($id);
        echo $result;
    }

    function desactiver(){
        $id = $this->uri->segment(3);
        $result = $this->utilisateurModel->desactivate_utilisateur($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }
    function modifier($id ){
        $this->utilisateurModel->update_utilisateur($id);
        redirect('utilisateur');
    }
    function read_by_id(){
        $id = $this->uri->segment(3);
        $result = $this->utilisateurModel->get_utilisateur($id);
        echo json_encode(['id'=>$id,'result'=>1,'data'=>$result]);
    }


    public function login_check()
    {
        // allow only Ajax request
        if($this->input->is_ajax_request()) {
            // grab the email value from the post variable.
            $login = $this->input->post('login');
            // check in database - table name : tbl_users  , Field name in the table : email
            if(!$this->form_validation->is_unique($login, 'utilisateur.utilisateur_login')) {
                // set the json object as output
                $this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'ce login est deja utilise par un autre utilisateur')));
            }
        }
    }




}
