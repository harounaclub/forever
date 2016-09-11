<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {


        $this->form_validation->set_rules('login','Identifiant','trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('password','Mot de passe','trim|required|xss_clean');
        
        if($this->session->userdata('id_user'))
        {

           redirect('dashboard');
       }
       else
       {

         if($this->form_validation->run())
         { 


             if($this->login_model->check_connection($this->input->post('login'), $this->input->post('password')))
             {

                 $data['admin_informations']=$this->login_model->getInfo_admin($this->input->post('login'),$this->input->post('password'));

                 foreach ($data['admin_informations'] as $lign) {
                    $data['id_user'] = $lign->id_user;
                    $data['login_user'] = $lign->login_user; //sera egalement sont email
                    $data['name_user'] = $lign->name_user;
                    $data['surname_user'] = $lign->surname_user;
                    //$data['droit_user'] = $lign->droit_administrateur;

                }

                $store_data_inSession = array(
                  'id_user'  => $data['id_user'],
                  'login_user' => $data['login_user'],
                  'nom_user'=> $data['name_user'],
                  'surname_user' => $data['surname_user'],
                  //'droit_admin' => $data['droit_administrateur']
                );

                $this->session->set_userdata($store_data_inSession);


                redirect('dashboard');

            }
            else {

             $data['error_message']='Login ou Mot de passe incorrect, Ressayez SVP';

             $this->load->view('login/login_view',$data);
         }



     }
     else
     {

      $this->load->view('login/login_view'); 
    }


}
}

function logout()
{
    //$this->session->unset_userdata('identifant_client');

    $this->session->unset_userdata('id_user');
    $this->session->unset_userdata('login_user');
    //session_destroy();
    redirect('login', 'refresh');
}


}

/* End of file connexion.php */
/* Location: ./application/modules/login/controllers/connexion.php */ ?>