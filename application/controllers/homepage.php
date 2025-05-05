<?php

class Homepage extends CI_Controller{
    public function index(){
        $this->load->view('templates/navbar');
        $this->load->view('home/v_homepage');
        $this->load->view('templates/footer');
    }

    public function menu(){
        $this->load->view('templates/navbar');
        $this->load->view('home/v_menu');
        $this->load->view('templates/footer');
    }

    public function billiard(){
        $this->load->view('templates/navbar');
        $this->load->view('home/v_billiard');
        $this->load->view('templates/footer');
    }

    public function pingpong(){
        $this->load->view('templates/navbar');
        $this->load->view('home/v_pingpong');
        $this->load->view('templates/footer');
    }

    public function about(){
        $this->load->view('templates/navbar');
        $this->load->view('home/v_about');
        $this->load->view('templates/footer');
    }

    public function blocked(){
        $this->load->view('home/v_access403');
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
