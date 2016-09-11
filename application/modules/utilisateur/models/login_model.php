<?php

class login_model extends CI_Model {



    function check_session(){
        if($this->session->data('user_id')){
            return 1;
        }
        return 0;
    }


    function check_user(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $encrypt_pass = md5($password);
        
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('utilisateur_login',$username);
        $this->db->where('utilisateur_password',$encrypt_pass);
        $q=$this->db->get();
        //var_dump($q->result());
        if($q->num_rows()>0){
           $row = $q->row();
           $data = $row;
           $this->session->set_userdata($data);
           return 1; 
        }  else {
            return 0;
        }
    }
            
    
    
}
