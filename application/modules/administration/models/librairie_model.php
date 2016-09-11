<?php

class librairie_model extends CI_Model {

   function  add_librairie($data){
            $this->db->insert('librairie',$data);
   }

    function  get_all_librairies(){
        $this->db->select('*');
        $this->db->from('librairie');
        $this->db->join('utilisateur','utilisateur.utilisateur_id = librairie.utilisateur_id');
        $this->db->order_by('librairie_id','DESC');
        $q = $this->db->get();
        return $q->result();


    }

    function delete_librairie($id){
        $this->db->where('librairie_id', $id);
        $this->db->delete('librairie');
        return true;
    }

    function get_librairie($id){
        $this->db->select('*');
        $this->db->from('librairie');
        $this->db->where('librairie_id',$id);
        $q = $this->db->get();
        return $q->result();
    }
    function update_librairie($data,$id){
        $this->db->where('librairie_id',$id);
        $this->db->update('librairie',$data);

    }


}
