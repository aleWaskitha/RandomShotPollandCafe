<?php

class Booking extends CI_Controller{

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('auth');
        }
    }

    public function billiard(){
        $this->load->view('templates/navbar');
        $this->load->view('booking/v_bookingBilliard');
    }

    public function pingpong(){
        $this->load->view('templates/navbar');
        $this->load->view('booking/v_bookingPingPong');
    }

    public function bookBilliard(){
        $this->form_validation->set_rules('namaLengkap', 'NamaLengkap', 
        'required|trim');
        $this->form_validation->set_rules('noTelepon', 'NoTelepon', 
        'required|trim|regex_match[/^08[0-9]{8,12}$/]');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 
        'required');
        $this->form_validation->set_rules('jamMulai', 'JamMulai', 'required');
        $this->form_validation->set_rules('jamAkhir', 'JamAkhir', 'required');
        $this->form_validation->set_rules('meja', 'Meja', 'required');

        $jamMulai = $this->input->post('jamMulai', true);
        $jamAkhir = $this->input->post('jamAkhir', true);
        $waktuBooking = $jamMulai ." - " . $jamAkhir;

        if($this->form_validation->run() == false) {
            $this->load->view('booking/billiard');
        } else {
            $data = [
                'Username'          => ($this->session->userdata('username')),
                'Booking'           => 'Billiard',
                'Nama'              => ($this->input->post('namaLengkap', true)),
                'No_Telepon'        => ($this->input->post('noTelepon', true)),
                'Tanggal'           => ($this->input->post('tanggal', true)),
                'Waktu_Booking'     => $waktuBooking,
                'Meja'              => ($this->input->post('meja', true)),
                'Catatan_Tambahan'  => ($this->input->post('catatanTambahan', true))
            ];

        $this->m_booking->booking($data);
        $this->session->set_flashdata('message', 
        '<div id="successBooking">Success to booking a place!</div>');
        redirect('homepage/index');
        }
    }

    public function bookPingpong(){
        $this->form_validation->set_rules('namaLengkap', 'NamaLengkap', 
        'required|trim');
        $this->form_validation->set_rules('noTelepon', 'NoTelepon', 
        'required|trim|regex_match[/^08[0-9]{8,12}$/]');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 
        'required');
        $this->form_validation->set_rules('jamMulai', 'JamMulai', 'required');
        $this->form_validation->set_rules('jamAkhir', 'JamAkhir', 'required');

        $jamMulai = $this->input->post('jamMulai', true);
        $jamAkhir = $this->input->post('jamAkhir', true);
        $waktuBooking = $jamMulai ." - " . $jamAkhir;

        if($this->form_validation->run() == false) {
            $this->load->view('booking/pingpong');
        } else {
            $data = [
                'Username'          => ($this->session->userdata('username')),
                'Booking'           => 'Pingpong',
                'Nama'              => ($this->input->post('namaLengkap', true)),
                'No_Telepon'        => ($this->input->post('noTelepon', true)),
                'Tanggal'           => ($this->input->post('tanggal', true)),
                'Waktu_Booking'     => $waktuBooking,
                'Meja'              => 1,
                'Catatan_Tambahan'  => ($this->input->post('catatanTambahan', true))
            ];

        $this->m_booking->booking($data);
        $this->session->set_flashdata('message', 
        '<div id="successBooking">Success to booking a place!</div>');
        redirect('homepage/index');
        }
    }
}
?>