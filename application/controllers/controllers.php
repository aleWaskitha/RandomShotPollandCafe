<?php

class Controllers extends CI_Controller{
    public function index(){
        $this->load->model('m_datamhs');
        $data['mahasiswa'] = $this->m_datamhs->get_data();

        $this->load->view('v_datamhs', $data);
    }
}
?>