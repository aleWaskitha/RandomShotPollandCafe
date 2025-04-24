<?php

class Homepage extends CI_Controller{
    public function index(){
        $this->load->view('home/v_homepage');
    }

    public function menu(){
        $this->load->view('home/v_menu');
    }

    public function billiard(){
        $this->load->view('home/v_billiard');
    }

    public function pingpong(){
        $this->load->view('home/v_pingpong');
    }
}
?>
