<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


function envoy_mail($mail_sender,$label_sender,$list_receiver,$subject,$message){

    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://smtp.gmail.com";
    $config['smtp_port'] = "465";
    $config['smtp_user'] = "harounclub1987@gmail.com"; 
    $config['smtp_pass'] = "Harouna123#@";
    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";

     $this->email->initialize($config);

     $this->email->from($mail_sender, $label_sender);
     //$list_receiver = array('harounclub@outlook.com');
     $this->email->to($list_receiver);
    
     $this->email->subject($subject);
     $this->email->message($message);
     $this->email->send();
     

   }


   function list_avis(){

     $m = new MongoClient();
     $db = $m->mongodb_test;
     $collection = $db->sondage;
     $data = $collection->find();


     return $data;
 

   }

}