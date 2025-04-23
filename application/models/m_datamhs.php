<?php

class M_datamhs extends CI_Model {
    public function get_data(){
        return $this->db->get('data_mahasiswa')->result_array();
    }        
}
?>