<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Seat extends CI_Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();

        if (intval($this->session->userdata('id_level'))  > 1 || $this->session->userdata('id') == null) {
            redirect('login', 'refresh');
        }
        if ($this->session->userdata('penumpang') != null) {
            $this->data = $this->session->userdata('penumpang');
        } else {
            redirect("home");
        }
    }

    public function index()
    {
        $data['title'] = 'Seat';
        if ($this->input->post('id') != null) {
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
                'sisa_kursi' => $this->input->post('sisa_kursi'),
                'nama_penumpang' => $this->input->post('nama_penumpang'),
                'no_ktp_penumpang' => $this->input->post('no_ktp_penumpang'),
                'no_duduk' => $this->input->post('no_duduk'),
                'id_duduk' => $this->input->post('id_duduk'),
            );
            $this->session->unset_userdata('penumpang');
            $this->session->set_userdata('seat', $data);
            redirect("pembayaran");
        } else {
            $data['penumpang'] = $this->data;
            $this->load->view('template/header_seat', $data);
            $this->load->view('seat/index', $data);
            $this->load->view('template/footer_seat');
        }
    }
}
    
    /* End of file Seat.php */
