<?php

class video_model extends CI_Model {

   function  add_video($data){
       $slug =$this->symfony_helper->urlize($data['video_titre']);
       $this->db->insert('video',$data);
       $id=$this->db->insert_id();
       $this->db->where('video_id',$id);
       $slug.='-'.$id;
       $this->db->update('video',array('video_slug'=>$slug));
   }

    function  get_all_videos(){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->join('utilisateur','utilisateur.utilisateur_id = video.utilisateur_id');
        $this->db->order_by('video_id','DESC');
        $q = $this->db->get();
        return $q->result();


    }

    function delete_video($id){
        $this->db->where('video_id', $id);
        $this->db->delete('video');
        return true;
    }

    function get_video($id){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('video_id',$id);
        $q = $this->db->get();
        return $q->result();
    }
    function update_video($data,$id){
        $data['video_slug'] =$this->symfony_helper->urlize($data['video_titre']).'-'.$id;
        $this->db->where('video_id',$id);
        $this->db->update('video',$data);

    }
    function activate_video($id){
        $this->db->where('video_id',$id);
        $this->db->update('video',array('video_une'=>1));

        $this->db->where_not_in('video_id',$id);
        $q=$this->db->update('video',array('video_une'=>0));
        return $q;

    }

}
