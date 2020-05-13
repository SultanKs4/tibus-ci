<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_model');
        $this->load->model('akun_model');
        $this->load->model('booking_model');
        $this->load->model('status_model');
        $this->load->model('method_model');
    }

    public function index()
    {
        $data['title'] = 'payment';
        $data['payment'] = $this->payment_model->getallpayment();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/payment/index', $data);
        $this->load->view('admin/template/footer');
    }

    // public function tambah()
    // {
    //     $data['title'] = 'Tambah payment';
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('kota', 'Kota', 'required');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required');


    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('admin/template/header', $data);
    //         $this->load->view('admin/payment/tambah', $data);
    //         $this->load->view('admin/template/footer');
    //     } else {
    //         $this->payment_model->tambahdatapayment();
    //         $this->session->set_flashdata('flash-data', ' ditambahkan');
    //         redirect('admin_payment', 'refresh');
    //     }
    // }

    public function hapus($id)
    {
        $this->payment_model->hapusdatapayment($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin/payment', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data payment';
        $data['payment'] = $this->payment_model->getpaymentbyid($id);
        $data['akun'] = $this->akun_model->getallakun();
        $data['booking'] = $this->booking_model->getallbooking();
        $data['method'] = $this->method_model->getallmethod();
        $data['status'] = $this->status_model->getallstatus();
        $this->form_validation->set_rules('id_akun', 'Id_akun', 'required');
        $this->form_validation->set_rules('kode_booking', 'Kode_booking', 'required|numeric');
        $this->form_validation->set_rules('total', 'Total', 'required|numeric');
        $this->form_validation->set_rules('metode_bayar', 'Metode_bayar', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/payment/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->payment_model->ubahdatapayment(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin/payment', 'refresh');
        }
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Payment';
        $data['payment'] = $this->payment_model->getpaymentbyid($id);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/payment/detail', $data);
        $this->load->view('admin/template/footer');
    }
}
    
    /* End of file Payment.php */