<?php

defined('BASEPATH') or exit('No direct script access allowed');

class payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_model');
        $this->load->model('tiket_model');
        $this->load->model('method_model');
        $this->load->model('status_model');


        if (intval($this->session->userdata('id_level')) != 1) {
            redirect('login', 'refresh');
        }
    }

    public function edit()
    {
        $data['title'] = 'Edit MyAccount';
        $data['payment'] = $this->payment_model->getpaymentbyid($this->session->userdata('id_payment'));
        $data['method'] = $this->method_model->getallmethod();
        $data['id_akun'] = $this->session->userdata('id');
        $data['tiket'] = $this->tiket_model->getalltiket();
        $data['status'] = $this->status_model->getallstatus();

        // $this->form_validation->set_rules('email', 'email', 'required');
        // $this->form_validation->set_rules('nama_depan', 'nama_depan', 'required');
        // $this->form_validation->set_rules('nama_belakang', 'nama_belakang', 'required');
        // $this->form_validation->set_rules('telpon', 'telpon', 'required');
        // $this->form_validation->set_rules('password', 'password', 'required');

        if (empty($_FILES['bukti_bayar']['name'])) {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/tiket/upload', $data);
            $this->load->view('user/template/footer');
        } else {
            $config['upload_path'] = './assets/img/payment/';
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $config['allowed_types'] = 'jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_bayar')) {
                $this->session->set_flashdata('error_upload', $this->upload->display_errors());
                $this->load->view('user/template/header', $data);
                $this->load->view('user/tiket/upload', $data);
                $this->load->view('user/template/footer');
            } else {
                $bukti_bayar = $this->upload->data('file_name');
                echo $bukti_bayar;
                $this->payment_model->ubahdatapayment($bukti_bayar);
                redirect('user/tiket', 'refresh');
            }
        }
    }
}
    
    /* End of file payment.php */
