<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Fbo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    //get informations from people connected

  function add_transaction($data){

     $this->db->insert('transaction', $data);
     return true; 
    
   }

   function add_fbo($data){

     $this->db->insert('fbo', $data);
     $insert_id = $this->db->insert_id();

    return  $insert_id;
    
   }


   function add_fichier_importer($data){

     $this->db->insert('fichier_importer', $data);
     $insert_id = $this->db->insert_id();

    return  $insert_id;
    
   }

   


    function add_resume_fbo($data){

     $this->db->insert('resume_fbo', $data);
     return true; 
    
   }

    function add_compte_bancaire($data){

     $this->db->insert('compte_bancaire', $data);
     return true; 
    
   }

   function add_credit_fbo($data){

     $this->db->insert('credit', $data);
     return true; 
    
   }


   function update_infos_fbo($code_distributeur,$data){

   $this->db->where('code_distributeur',$code_distributeur);
   $this->db->update('fbo', $data);
   return TRUE;

   }



   function update_resume_fbo($code_distributeur,$data){

   $this->db->where('code_distributeur',$code_distributeur);
   $this->db->update('resume_fbo', $data);
   return TRUE;

   }


   function update_credit_fbo($code_distributeur,$data){

   $this->db->where('code_distributeur',$code_distributeur);
   $this->db->update('credit', $data);
   return TRUE;

   }


   function check_fbo_infos($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('fbo');

       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return True;
       }else{

           return False;

       }

   }


   function check_fichier_existe($nom_fichier){

       $this->db->where('nom_fichier',$nom_fichier);
       $q = $this->db->get('fichier_importer');

       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return True;
       }else{

           return False;

       }

   }


   function get_fbo_infos($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('fbo');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }

   function get_transactionfbo_infos($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('transaction');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }


   function get_fbo_infos_banque_bycode($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('compte_bancaire');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }

   function get_resume_fbo_bycode($code_distributeur){

       $this->db->where('code_distributeur',$code_distributeur);
       $q = $this->db->get('resume_fbo');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }


   function get_fichier_importer_infos(){

       
       $q = $this->db->get('fbo');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }


   function get_fbo_infos_banque(){

       
       $q = $this->db->get('compte_bancaire');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }




    
   }