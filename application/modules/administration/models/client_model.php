<?php

class client_model extends CI_Model {

   function  add_client($data){
       $id=$this->session->userdata('utilisateur_id');
       $q=$this->db->get('client');
        if($q->num_rows()){
            $this->db->insert('client',$data);
        }else{
            $this->db->query("INSERT INTO client (client_nom,client_phone,client_logo,client_site,utilisateur_id) VALUES ('FINASYS','49385000','logo.png','www.ecolemedia.net','$id')");

            $this->db->insert('client',$data);
        }

   }

    function  get_all_clients(){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->join('utilisateur','utilisateur.utilisateur_id = client.utilisateur_id');
        $this->db->order_by('client_id','DESC');
        $q = $this->db->get();
        return $q->result();


    }

    function delete_client($id){
        $this->db->where('client_id', $id);
        $this->db->delete('client');
        return true;
    }

    function get_client($id){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->where('client_id',$id);
        $q = $this->db->get();
        return $q->result();
    }
    function update_client($data,$id){
        $data['client_slug'] =$this->symfony_helper->urlize($data['client_titre']).'-'.$id;
        $this->db->where('client_id',$id);
        $this->db->update('client',$data);

    }


}
