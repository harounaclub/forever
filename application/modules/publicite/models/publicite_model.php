<?php

class publicite_model extends CI_Model {



function get_all_publicites(){
    $this->db->select('*');
    $this->db->from('publicite');
    $this->db->join('client','client.client_id = publicite.client_id');
    $this->db->join('pub_position','pub_position.pub_position_id = publicite.position_id');
    $this->db->order_by('publicite_id','DESC');
    $q = $this->db->get();
    return $q->result();

}
    
function add_publicite($data){
   $this->db->insert('publicite',$data);
}
function activate_publicite($id){
    $this->db->where('publicite_id',$id);
    $q=$this->db->get('publicite');
    $row=$q->row();
    $this->db->where('publicite_id',$id);
    $this->db->update('publicite',array('publicite_status'=>1));

    $this->db->where('position_id',$row->position_id);
    $this->db->where_not_in('publicite_id ',$id);
    $this->db->update('publicite',array('publicite_status'=>0));

}
 function desactivate_publicite($id){
     $this->db->where('publicite_id',$id);
     $q=$this->db->get('publicite');
     $row=$q->row();
     $this->db->where('publicite_id',$id);
     $this->db->update('publicite',array('publicite_status'=>0));

     $this->db->where('position_id',$row->position_id);
     $this->db->order_by('publicite_id');
     $this->db->limit(1);
     $q1=$this->db->get('publicite');
     $row1=$q1->row();
     $this->db->where("publicite_id",$row1->publicite_id);
     $this->db->update('publicite',array('publicite_status'=>1));

 }

    function add_position($data){
        $this->db->insert('pub_position',$data);
        $id=$this->db->insert_id();
        $q=$this->db->query('SELECT * FROM client ORDER BY client_id ASC LIMIT 1');
        $row=$q->row();
        $data1=array('publicite_nom'=>$row->client_nom,
            'publicite_image'=>$data['pub_position_image'],
            'publicite_url'=>$data['pub_position_url'],
                      'position_id'=>$id,
                      'client_id'=>$row->client_id,
                      'publicite_status'=>'1',
            'utilisateur_id'=>$this->session->userdata('utilisateur_id')
        );
        $this->db->insert('publicite',$data1);
    }

     function get_position($id){
         $this->db->where('pub_position_id',$id);
         $q=$this->db->get('pub_position');
         return $q->row();
     }

    function  get_all_positions(){
        $this->db->select('*');
        $this->db->from('pub_position');
        $this->db->join('utilisateur','utilisateur.utilisateur_id = pub_position.utilisateur_id');
        $this->db->order_by('pub_position_id','DESC');
        $q = $this->db->get();
        return $q->result();


    }

    function  get_all_clients(){
        $this->db->select('*');
        $this->db->from('client');
        $q = $this->db->get();
        return $q->result();


    }



    


    
}
