<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_trayek extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('trayek_model');
        $this->load->model('po_model');
        $this->load->model('terminal_model');
    }

    public function index()
    {
        $data['title'] = 'trayek';
        $data['trayek'] = $this->trayek_model->getalltrayek();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/trayek/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['po'] = $this->po_model->getallpo();
        $data['terminal'] = $this->terminal_model->getallterminal();
        $data['title'] = 'Tambah trayek';
        $this->form_validation->set_rules('id_po', 'Id_po', 'required');
        $this->form_validation->set_rules('dari', 'Dari', 'required|numeric');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required|numeric');
        $this->form_validation->set_rules('jam_berangkat', 'Jam_berangkat', 'required');
        $this->form_validation->set_rules('jam_tiba', 'Jam_tiba', 'required');
        $this->form_validation->set_rules('tanggal_berangkat', 'Tanggal_berangkat', 'required');
        $this->form_validation->set_rules('tanggal_tiba', 'Tanggal_tiba', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/trayek/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->trayek_model->tambahdatatrayek();
            $this->session->set_flashdata('flash-data', ' ditambahkan');
            redirect('admin_trayek', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->trayek_model->hapusdatatrayek($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin_trayek', 'refresh');
    }

    public function edit($id)
    {
        $data['po'] = $this->po_model->getallpo();
        $data['terminal'] = $this->terminal_model->getallterminal();
        $data['title'] = 'Edit Data trayek';
        $data['trayek'] = $this->trayek_model->gettrayekbyid($id);

        $this->form_validation->set_rules('id_po', 'id_po', 'required');
        $this->form_validation->set_rules('dari', 'Dari', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('jam_berangkat', 'Jam_berangkat', 'required');
        $this->form_validation->set_rules('jam_tiba', 'Jam_tiba', 'required');
        $this->form_validation->set_rules('tanggal_berangkat', 'Tanggal_berangkat', 'required');
        $this->form_validation->set_rules('tanggal_tiba', 'Tanggal_tiba', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/trayek/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->trayek_model->ubahdatatrayek(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin_trayek', 'refresh');
        }
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Trayek';
        $data['trayek'] = $this->trayek_model->gettrayekbyid($id);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/trayek/detail', $data);
        $this->load->view('admin/template/footer');;
    }
}
    
    /* End of file Admin_trayek.php */
