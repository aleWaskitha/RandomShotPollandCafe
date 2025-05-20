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

    public function booking(){
        $this->load->view('templates/navbar');
        $this->load->view('home/v_directbooking');
        $this->load->view('templates/footer');
    }

    public function profilePage(){
        if (!$this->session->userdata('username')){
            redirect('auth');
        }

        $this->load->model('m_auth');
        $username = $this->session->userdata('username');
        $data['users'] = $this->m_auth->getData($username);

        $this->load->view('templates/navbar');
        $this->load->view('home/v_profilepage', $data);
    }

    public function historyBooking(){
        if (!$this->session->userdata('username')){
            redirect('auth');
        }
        
        $this->load->model('m_booking');
        $username = $this->session->userdata('username');
        $data['data_booking'] = $this->m_booking->getData($username);

        $this->load->view('templates/navbar');
        $this->load->view('home/v_historyBookingUsers', $data);
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
