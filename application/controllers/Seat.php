<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Seat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (intval($this->session->userdata('id_level'))  > 1) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Seat';
        $this->load->view('template/header_seat');
        $this->load->view('seat/index');
        $this->load->view('template/footer_seat');
    }
}
    
    /* End of file Seat.php */
