<?php

class M_auth extends CI_Model{
    public function __construct() {
        parent::__construct();
        $query = $this->db->get('account_user');
    }

    public function registration($data) {
        $this->db->insert('account_user', $data);
    }

    public function check_login($username, $password) {
        $this->db->where('Username', $username);
        $user = $this->db->get('account_user')->row_array();
    
        if ($user) {
            if (password_verify($password, $user['Password'])) {
                return $user;
            }
        }
        return false;
    }
}
?>