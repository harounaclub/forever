<?php

class actualite_model extends CI_Model {

   function  add_Actualite($data){
       $slug =$this->symfony_helper->urlize($data['actualite_titre']);
       $this->db->insert('actualite',$data);
       $id=$this->db->insert_id();
       $this->db->where('actualite_id',$id);
       $slug.='-'.$id;
       $this->db->update('actualite',array('actualite_slug'=>$slug));
   }

    function  get_all_actualites(){
        $this->db->select('*');
        $this->db->from('actualite');
        $this->db->join('utilisateur','utilisateur.utilisateur_id = actualite.utilisateur_id');
        $q = $this->db->get();
        return $q->result();


    }

    function delete_actualite($id){
        $this->db->where('actualite_id', $id);
        $this->db->delete('actualite');
        return true;
    }

    function get_actualite($id){
        $this->db->select('*');
        $this->db->from('actualite');
        $this->db->where('actualite_id',$id);
        $q = $this->db->get();
        return $q->result();
    }
    function update_actualite($data,$id){
        $data['actualite_slug'] =$this->symfony_helper->urlize($data['actualite_titre']).'-'.$id;
        $this->db->where('actualite_id',$id);
        $this->db->update('actualite',$data);

    }
    function activate_video($id){

        $this->db->where('actualite_id',$id);
        $q=$this->db->update('actualite',array('actualite_une'=>1));
        return $q;
    }

    function desactivate_video($id){

        $this->db->where('actualite_id',$id);
        $q=$this->db->update('actualite',array('actualite_une'=>0));
        return $q;
    }


}
