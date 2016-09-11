<?php

class accueil_model extends CI_Model {




    

      function  get_all_actualites(){

          $result = $this->db->get('actualite');
          return $result->result();

      }
      function get_all_videos(){
          $result = $this->db->get('video');
          return $result->result();
      }

    function get_video_une(){
        $this->db->where('video_une',1);
        $result = $this->db->get('video');
        return $result->result();
    }

    function get_all_flashs(){
            $result = $this->db->get('flash');
            return $result->result();

        }
    function get_actualites_une(){
        $this->db->where('actualite_une',1);
        $result = $this->db->get('actualite');
        return $result->result();

    }

    


    
}
