<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Seat extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Register';
        $this->load->view('template/header_seat');
        $this->load->view('seat/index');
        $this->load->view('template/footer_seat');
        $this->load->library('session');
    }
}
    
    /* End of file Login.php */
