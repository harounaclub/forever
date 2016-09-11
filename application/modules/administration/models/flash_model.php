<?php

class flash_model extends CI_Model {

   function  add_flash($data){
       $this->db->insert('flash',$data);
   }

    function  get_all_flashs(){
        $this->db->select('*');
        $this->db->from('flash');
        $this->db->join('utilisateur','utilisateur.utilisateur_id = flash.utilisateur_id');
        $q = $this->db->get();
        return $q->result();


    }

    function delete_flash($id){
        $this->db->where('flash_id', $id);
        $this->db->delete('flash');
        return true;
    }

    function get_flash($id){
        $this->db->select('*');
        $this->db->from('flash');
        $this->db->where('flash_id',$id);
        $q = $this->db->get();
        return $q->result();
    }
    function update_flash($data,$id){
        $data['flash_slug'] =$this->symfony_helper->urlize($data['flash_titre']).'-'.$id;
        $this->db->where('flash_id',$id);
        $this->db->update('flash',$data);

    }


}
