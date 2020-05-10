<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Register';
        $this->load->view('template/header_register');
        $this->load->view('register/index');
        $this->load->view('template/footer_register');
        $this->load->library('session');
    }
}
    
    /* End of file Login.php */
