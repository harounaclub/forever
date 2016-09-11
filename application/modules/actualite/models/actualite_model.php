<?php

class actualite_model extends CI_Model {


function record_count(){
    return $this->db->count_all("actualite");
}

    function fetch_data($limit, $id) {
        $offset = ($id-1)*$limit;
        $query = $this->db->get( 'actualite', $limit, $offset );
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }
        return false;
    }

    function get_actualite_by_slug($slug){

        $this->db->where('actualite_slug',$slug);
        $q=$this->db->get('actualite');
        return $q->result();
    }
    


    
}
