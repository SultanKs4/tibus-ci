<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tiket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tiket_model');
        $this->load->model('akun_model');
        $this->load->model('trayek_model');
        $this->load->model('payment_model');

        if (intval($this->session->userdata('id_level')) != 1) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'tiket';
        $data['akun'] = $this->akun_model->getakunbyid($this->session->userdata('id'));
        $data['trayek'] = $this->trayek_model->getalltrayek();
        $data['payment'] = $this->payment_model->getallpayment();
        $data['tiket'] = $this->tiket_model->getalltiket();
        $this->load->view('user/template/header', $data);
        $this->load->view('user/tiket/index', $data);
        $this->load->view('user/template/footer');
    }
}
    
    /* End of file tiket.php */
