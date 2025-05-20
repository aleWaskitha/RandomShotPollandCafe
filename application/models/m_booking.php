<?php

class M_booking extends CI_Model{
    public function __construct() {
        parent::__construct();
        $query = $this->db->get('list_booking');
    }

    public function booking ($data) {
        $this->db->insert('list_booking', $data);
    }

    public function dataBooking() {
        return $this->db->get('list_booking')->result_array();
        return $this->db->count_all('list_booking');
    }

    public function bookingToday($date) {
        $this->db->where('Tanggal', $date);
        return $this->db->get('list_booking')->result_array();
    }

    public function countBookingToday($date) {
        $this->db->where('Tanggal', $date);
        return $this->db->count_all_results('list_booking');
    }

    public function bookingHistoryMonth($month, $year) {
        $this->db->where('MONTH(Tanggal)', $month);
        $this->db->where('YEAR(Tanggal)', $year);
        return $this->db->count_all_results('list_booking');
    }
    
    public function bookingHistory($date) {
        $this->db->where('Tanggal <', $date);
        return $this->db->get('list_booking')->result_array();
    }

    public function getChartWeekly() {
        $this->db->select("DATE(Tanggal) as Tanggal, COUNT(*) as total");
        $this->db->group_by("DATE(Tanggal)");
        $query = $this->db->get("list_booking");
        return $query->result_array();
    }

    public function getChartMonthly() {
        $this->db->select("MONTH(Tanggal) as Month, COUNT(*) as total");
        $this->db->group_by("MONTH(Tanggal)");
        $query = $this->db->get("list_booking");
        return $query->result_array();
    }

    public function getData($username) {
        $this->db->where('Username', $username);
        return $this->db->get('list_booking')->result_array();
    }
}
?>