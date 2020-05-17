<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();

        if (intval($this->session->userdata('id_level'))  > 1) {
            redirect('login', 'refresh');
        }
        // if ($this->session->flashdata('seat') == null) {
        //     redirect('seat');
        // } else {
        //     $this->data = $this->session->flashdata('seat');
        // }
        $this->load->model('Method_model', 'payment');
    }

    public function index()
    {
        $data['title'] = 'Pembayaran';
        // $data['seat'] = $this->data;
        $data['payment'] = $this->payment->getallmethod();
        $this->load->view('template/header_pembayaran');
        $this->load->view('pembayaran/index', $data);
        $this->load->view('template/footer_pembayaran');
    }
}
    
    /* End of file Pembayaran.php */
