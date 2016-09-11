<?php

class Utilisateur_model extends CI_Model {
    

            

    
    function get_all_utilisateurs(){

        $result = $this->db->get('utilisateur');
        return $result->result();
    }


    function add_utilisateur($action=null){

            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenoms');
            $email = $this->input->post('email');
            $password= md5($this->input->post('password'));
            $numero= $this->input->post('numero');
            $login= $this->input->post('login');


            $data=array(
                "utilisateur_nom"=>$nom,
                "utilisateur_prenoms"=>$prenom,
                "utilisateur_email"=>$email,
                "utilisateur_password"=>$password,
                "utilisateur_phone"=>$numero,
                "utilisateur_login"=>$login,




            );

            $this->db->insert('utilisateur',$data);



    }
    function update_utilisateur($id=null){

        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenoms');
        $email = $this->input->post('email');
        $password= md5($this->input->post('password'));
        $numero= $this->input->post('numero');
        $login= $this->input->post('login');


        $data=array(
            "utilisateur_nom"=>$nom,
            "utilisateur_prenoms"=>$prenom,
            "utilisateur_email"=>$email,
            "utilisateur_password"=>$password,
            "utilisateur_phone"=>$numero,
            "utilisateur_login"=>$login,




        );

        $this->db->where('utilisateur_id',$id);
        $this->db->update('utilisateur',$data);



    }

    function get_utilisateur($id){
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('utilisateur_id',$id);
        $q = $this->db->get();
        return $q->result();
    }



    function delete_utilisateur($id){
        $this->db->where('utilisateur_id', $id);
        $this->db->delete('utilisateur');
        return true;
    }




    


    
}
