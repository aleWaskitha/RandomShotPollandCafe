<?php

class Admin extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('m_booking');
        if ($this->session->userdata('role_id') != 1){
            redirect('homepage/blocked');
        }
    }

    public function index(){        
        $today = date('Y-m-d');
        $data['count_data'] = $this->m_booking->countBookingToday($today);
        $data['count_user'] = $this->m_auth->countUser();

        $bookingWeekly = $this->m_booking->getChartWeekly();

        $chartLabels = [];
        $chartData = [];

        foreach ($bookingWeekly as $row) {
            $chartLabels[] = date('l', strtotime($row['Tanggal']));
            $chartData[] = $row['total'];
        }

        $data['labels'] = json_encode($chartLabels);
        $data['data'] = json_encode($chartData);
        
        $this->load->view('templates/navbarAdmin');
        $this->load->view('templates/sidenavAdmin');
        $this->load->view('admin/v_dashboard', $data);
    }

    public function listBooking(){
        $today = date('Y-m-d');
        $data['data_booking'] = $this->m_booking->bookingToday($today);

        $this->load->view('templates/navbarAdmin');
        $this->load->view('templates/sidenavAdmin');
        $this->load->view('admin/v_listBooking', $data);
    }

    public function history(){
        $today = date('Y-m-d');
        $data['data_booking'] = $this->m_booking->bookingHistory($today);

        $this->load->view('templates/navbarAdmin');
        $this->load->view('templates/sidenavAdmin');
        $this->load->view('admin/v_historyBooking', $data);
    }

    public function report(){
        $month = date('m');
        $year = date('Y');
        $data['count_user'] = $this->m_auth->countUser();
        $data['data_booking'] = $this->m_booking->bookingHistoryMonth($month, $year);

        $bookingMonthly = $this->m_booking->getChartMonthly();

        $chartLabels = [];
        $chartData = [];

        foreach ($bookingMonthly as $row) {
            $chartLabels[] = date('F', strtotime($row['Month']));
            $chartData[] = $row['total'];
        }

        $data['labels'] = json_encode($chartLabels);
        $data['data'] = json_encode($chartData);

        $this->load->view('templates/navbarAdmin');
        $this->load->view('templates/sidenavAdmin');
        $this->load->view('admin/v_report', $data);
    }
}