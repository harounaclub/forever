<?php

class Accueil_model extends CI_Model {
    

            

    
    function get_all_users(){

        $result = $this->db->get('user');
        return $result->result();
    }




    


    
}
