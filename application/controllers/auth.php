<?php

class Auth extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_auth');
    }

    public function login(){
        $this->form_validation->set_rules('username', 'Username', 
        'required|trim');
        $this->form_validation->set_rules('password', 'Password', 
        'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view('auth/v_login');
        } else {
            $this->_login();
        }
    }

    private function _login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $result = $this->m_auth->check_login($username, $password);

        if ($result) {
            $this->session->set_userdata([
                'username' => $result['Username'],
                'role_id'  => $result['Role_id']
            ]);
            redirect('homepage/index');
        } else {
            $this->session->set_flashdata('message', 
                '<div id="failLogin">Invalid username or password!</div>');
            redirect('auth/login');
        }
    }

    public function registration(){
        $this->form_validation->set_rules('username', 'Username', 
        'required|trim|is_unique[account_user.Username]', [
            'is_unique' => 'Username already exist!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 
        'required|trim|valid_email|is_unique[account_user.Email]', [
            'is_unique' => 'Email already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 
        'required|trim|min_length[6]|matches[confirmPassword]', [
            'min_length' => 'Password too short!',
            'matches' => 'Password not match!'
        ]);
        $this->form_validation->set_rules('confirmPassword', 'ConfirmPassword', 'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view('auth/v_register');
        } else {
            $data = [
                'Role_id'       => 2,
                'Username'      => htmlspecialchars($this->input->post('username', true)),
                'Email'         => htmlspecialchars($this->input->post('email', true)),
                'Password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active'     => 1,
                'date_created'  => date('Y-m-d')
            ];

            $this->m_auth->registration($data);
            $this->session->set_flashdata('message', 
            '<div id="successRegist">Success to create account! Please Login</div>');
            redirect('auth/login');
        }
    }
}
?>