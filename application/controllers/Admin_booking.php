<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_booking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('booking_model');
    }

    public function index()
    {
        $data['title'] = 'booking';
        $data['booking'] = $this->booking_model->getallbooking();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/booking/index', $data);
        $this->load->view('admin/template/footer');
    }

    // public function tambah()
    // {
    //     $data['title'] = 'Tambah booking';
    //     $this->form_validation->set_rules('name', 'Name', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('admin/template/header', $data);
    //         $this->load->view('admin/booking/tambah', $data);
    //         $this->load->view('admin/template/footer');
    //     } else {
    //         $this->booking_model->tambahdatabooking();
    //         $this->session->set_flashdata('flash-data', ' ditambahkan');
    //         redirect('admin_booking', 'refresh');
    //     }
    // }

    public function hapus($id)
    {
        $this->booking_model->hapusdatabooking($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin_booking', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data booking';
        $data['booking'] = $this->booking_model->getbookingbyid($id);

        $this->form_validation->set_rules('name', 'Name', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/booking/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->booking_model->ubahdatabooking(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin_booking', 'refresh');
        }
    }
}
    
    /* End of file Admin_booking.php */
