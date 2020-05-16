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

        if (intval($this->session->userdata('id_level')) > 1) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'tiket';
        $data['akun'] = $this->akun_model->getakunbyid($this->session->userdata('id'));
        $data['trayek'] = $this->trayek_model->getalltrayek();
        $data['tiket'] = $this->tiket_model->getalltiket();
        $this->load->view('user/template/header', $data);
        $this->load->view('user/tiket/index', $data);
        $this->load->view('user/template/footer');
    }

    // public function tambah()
    // {
    //     $data['title'] = 'Tambah tiket';
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('kota', 'Kota', 'required');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required');


    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('user/template/header', $data);
    //         $this->load->view('user/tiket/tambah', $data);
    //         $this->load->view('user/template/footer');
    //     } else {
    //         $this->tiket_model->tambahdatatiket();
    //         $this->session->set_flashdata('flash-data', ' ditambahkan');
    //         redirect('user/tiket', 'refresh');
    //     }
    // }

    // public function hapus($id)
    // {
    //     $this->tiket_model->hapusdatatiket($id);
    //     $this->session->set_flashdata('flash-data', ' dihapus');
    //     redirect('user/tiket', 'refresh');
    // }

    // public function edit($id)
    // {
    //     $data['title'] = 'Edit Data tiket';
    //     $data['tiket'] = $this->tiket_model->gettiketbyid($id);
    //     $data['akun'] = $this->akun_model->getallakun();
    //     $data['booking'] = $this->booking_model->getallbooking();

    //     $this->form_validation->set_rules('kode_booking', 'Kode_booking', 'required');
    //     $this->form_validation->set_rules('nama_penumpang', 'Nama_penumpang', 'required');
    //     $this->form_validation->set_rules('no_ktp_penumpang', 'No_ktp_penumpang', 'required');
    //     $this->form_validation->set_rules('no_duduk', 'No_duduk', 'required');
    //     $this->form_validation->set_rules('id_akun', 'id_akun', 'required');
    //     $this->form_validation->set_rules('id_trayek', 'Id_trayek', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('user/template/header', $data);
    //         $this->load->view('user/tiket/edit', $data);
    //         $this->load->view('user/template/footer');;
    //     } else {
    //         $this->tiket_model->ubahdatatiket(); // JS2 B3 no 1
    //         $this->session->set_flashdata('flash-data', ' diedit');
    //         redirect('user/tiket', 'refresh');
    //     }
    // }
}
    
    /* End of file tiket.php */
