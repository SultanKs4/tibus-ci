<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();

        if (intval($this->session->userdata('id_level'))  > 1) {
            redirect('login', 'refresh');
        }
        if ($this->session->userdata('seat') == null) {
            redirect('home');
        } else {
            $this->data = $this->session->userdata('seat');
            $this->load->model('Method_model', 'payment');
        }
    }

    public function index()
    {
        $data['title'] = 'Pembayaran';
        $data['title'] = 'Seat';
        if ($this->input->post('id') != null) {
            $this->load->model('tiket_model');
            $data = array(
                'id_trayek' => $this->input->post('id'),
                'id_akun' => $this->input->post('id_akun'),
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
                'no_duduk' => $this->input->post('no_duduk'),
                'id_duduk' => $this->input->post('id_duduk'),
                'metode_bayar' => $this->input->post('pembayaran'),
                'status' => $this->input->post('status'),
            );
            $this->session->unset_userdata('penumpang');
            $this->tiket_model->transactionTiket($data);
            redirect("selesai");
        } else {
            $data['seat'] = $this->data;
            $data['payment'] = $this->payment->getallmethod();
            $this->load->view('template/header_pembayaran');
            $this->load->view('pembayaran/index', $data);
            $this->load->view('template/footer_pembayaran');
        }
    }
}
    
    /* End of file Pembayaran.php */
