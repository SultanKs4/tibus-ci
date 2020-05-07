<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_po extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('po_model');
    }

    public function index()
    {
        $data['title'] = 'po';
        $data['po'] = $this->po_model->getallpo();
        if ($this->input->post('keyword')) {
            $data['po'] = $this->po_model->caridatapo();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/po/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah po';
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/po/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->po_model->tambahdatapo();
            $this->session->set_flashdata('flash-data', ' ditambahkan');
            redirect('admin_po', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->po_model->hapusdatapo($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin_po', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data po';
        $data['po'] = $this->po_model->getpobyid($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/po/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->po_model->ubahdatapo(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin_po', 'refresh');
        }
    }
}
    
    /* End of file Admin_po.php */
