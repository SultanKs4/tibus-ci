<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penumpang extends CI_Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        if (intval($this->session->userdata('id_level'))  > 1) {
            redirect('login', 'refresh');
        }
        if ($this->session->userdata('trayek') != null) {
            $this->data = $this->session->userdata('trayek');
        } else {
            redirect("home");
        }
    }

    public function index()
    {
        $data['title'] = 'Penumpang';
        $this->form_validation->set_rules('nama_penumpang', 'Nama Penumpang', 'required');
        $this->form_validation->set_rules('no_ktp_penumpang', 'Penumpang', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $data['trayek'] = $this->data;
            $this->load->view('template/header', $data);
            $this->load->view('penumpang', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id' => $this->input->post('id'),
                'po' => $this->input->post('po'),
                'dari' => $this->input->post('dari'),
                'tujuan' => $this->input->post('tujuan'),
                'jam_berangkat' => $this->input->post('jam_berangkat'),
                'jam_tiba' => $this->input->post('jam_tiba'),
                'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),
                'tanggal_tiba' => $this->input->post('tanggal_tiba'),
                'harga' => $this->input->post('harga'),
                'nama_penumpang' => $this->input->post('nama_penumpang'),
                'no_ktp_penumpang' => $this->input->post('no_ktp_penumpang'),
            );
            $this->session->unset_userdata('trayek');
            $this->session->set_userdata('penumpang', $data);
            redirect("seat");
        }
    }
}
    
    /* End of file Penumpang.php */
