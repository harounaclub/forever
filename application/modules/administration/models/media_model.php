<?php

class media_model extends CI_Model {

   function  add_media($data){
       $this->db->insert('media',$data);
       $id=$this->db->insert_id();
       $this->db->where('media_id',$id);
       $slug=$data['media_slug'].'-'.$id;
       $this->db->update('media',array('media_slug'=>$slug));
   }
function  add_category($data){
       $slug =$this->symfony_helper->urlize($data['media_category_titre']);
       $this->db->insert('media_category',$data);
       $id=$this->db->insert_id();
       $this->db->where('media_category_id',$id);
       $slug.='-'.$id;
       $this->db->update('media_category',array('media_category_slug'=>$slug));
   }

    function get_all_categories(){
        $q=$this->db->get('media_category');
        return $q->result();
    }

    function  get_all_medias(){
        $this->db->select('*');
        $this->db->from('media');
        $this->db->order_by('media_id','DESC');
        $q = $this->db->get();
        return $q->result();


    }

    function delete_media($id){
        $this->db->where('media_id', $id);
        $this->db->delete('media');
        return true;
    }

    function get_media($id){
        $this->db->select('*');
        $this->db->from('media');
        $this->db->where('media_id',$id);
        $q = $this->db->get();
        return $q->result();
    }
    function update_media($data,$id){
        $data['media_slug'] =$this->symfony_helper->urlize($data['media_titre']).'-'.$id;
        $this->db->where('media_id',$id);
        $this->db->update('media',$data);

    }
    function activate_media($id){
        $this->db->where('media_id',$id);
        $this->db->update('media',array('media_une'=>1));

        $this->db->where_not_in('media_id',$id);
        $q=$this->db->update('media',array('media_une'=>0));
        return $q;

    }

}
