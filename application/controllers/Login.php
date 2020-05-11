<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('template/header_login');
        $this->load->view('login/index');
        $this->load->view('template/footer_login');
        $this->load->library('session');
    }
}
    
    /* End of file Login.php */
