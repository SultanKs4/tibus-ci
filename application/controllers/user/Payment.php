<?php

defined('BASEPATH') or exit('No direct script access allowed');

class payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_model');
        $this->load->model('tiket_model');

        if (intval($this->session->userdata('id_level')) != 1) {
            redirect('login', 'refresh');
        }
    }

    // public function index()
    // {
    //     $data['title'] = 'MyAccount';
    //     $data['payment'] = $this->payment_model->getpaymentbyid($this->session->userdata('id'));
    //     $this->load->view('user/template/header', $data);
    //     $this->load->view('user/payment/index', $data);
    //     $this->load->view('user/template/footer');;
    // }

    // public function tambah()
    // {
    //     $data['title'] = 'Tambah payment';
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('kota', 'Kota', 'required');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required');


    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('user/template/header', $data);
    //         $this->load->view('user/payment/tambah', $data);
    //         $this->load->view('user/template/footer');
    //     } else {
    //         $this->payment_model->tambahdatapayment();
    //         $this->session->set_flashdata('flash-data', ' ditambahkan');
    //         redirect('user/payment', 'refresh');
    //     }
    // }

    // public function hapus($id)
    // {
    //     $this->payment_model->hapusdatapayment($id);
    //     $this->session->set_flashdata('flash-data', ' dihapus');
    //     redirect('user/payment', 'refresh');
    // }

    public function edit($id)
    {
        $data['title'] = 'Edit MyAccount';
        $data['payment'] = $this->payment_model->getpaymentbyid($id);
        $data['tiket'] = $this->tiket_model->getalltiket();

        // $this->form_validation->set_rules('email', 'email', 'required');
        // $this->form_validation->set_rules('nama_depan', 'nama_depan', 'required');
        // $this->form_validation->set_rules('nama_belakang', 'nama_belakang', 'required');
        // $this->form_validation->set_rules('telpon', 'telpon', 'required');
        // $this->form_validation->set_rules('password', 'password', 'required');

        // if ($this->form_validation->run() == FALSE) {
        $this->load->view('user/template/header', $data);
        $this->load->view('user/tiket/upload', $data);
        $this->load->view('user/template/footer');
        // } else {
        //     $this->payment_model->ubahdatapayment(); // JS2 B3 no 1
        //     $this->session->set_flashdata('flash-data', ' diedit');
        //     redirect('user/tiket', 'refresh');
        // }
    }

    public function uploadtf($id)
    {
        $bukti_bayar = $_FILES['bukti_bayar'];
        if ($bukti_bayar = '') {
        } else {
            $config['upload_path']          = './assets/img/payment/';
            $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('bukti_bayar')){
                echo "Upload Gagal"; die();
            }else{
                $bukti_bayar=$this->upload->data('file_name');
            }
        }
        $this->payment_model->ubahdatapayment();
        redirect('user/tiket', 'refresh');
    }

    // public function detail($id)
    // {
    //     $data['title'] = 'Detail payment';
    //     $data['payment'] = $this->payment_model->getpaymentbyid($id);
    //     $this->load->view('user/template/header', $data);
    //     $this->load->view('user/payment/detail', $data);
    //     $this->load->view('user/template/footer');;
    // }
}
    
    /* End of file payment.php */
