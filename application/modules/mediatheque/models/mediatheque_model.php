<?php

class mediatheque_model extends CI_Model {




    

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
    function get_all_medias(){
          $this->db->select('*');
          $this->db->from('media_category');
        $this->db->join('media','media.media_category_id = media_category.media_category_id');
        $this->db->group_by('media_category.media_category_id');
        $q = $this->db->get();
        return $q->result();
        }
//      function get_album_photo($slug){
//          $this->db->select('*');
//          $this->db->from('media');
//          $this->db->join('media_category','media_category.media_category_id = media.media_category_id');
//          $this->db
//      }


    


    
}
