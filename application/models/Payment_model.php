<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Payment_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus-ci-admin/api/'
        ]);
    }

    public function getallpayment()
    {
        $response = $this->_client->request('GET', 'payment', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusdatapayment($id)
    {
        $response = $this->_client->request('DELETE', 'payment', [
            'form_params' => [
                'id' => $id,
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    // public function tambahdatapayment() // JS2 B3 no 3
    // {
    //     $data = [
    //         "nama" => $this->input->post('nama', true),
    //         "kota" => $this->input->post('kota', true),
    //         "alamat" => $this->input->post('alamat', true),
    //         'tkn' => 'qwe123'
    //     ];
    //     $response = $this->_client->request('POST', 'payment', [
    //         'form_params' => $data
    //     ]);

    //     $result = json_decode($response->getBody()->getContents(), true);
    //     return $result;
    // }

    public function ubahdatapayment() // JS2 B3 no 3
    {
        $data = [
            "id_akun" => $this->input->post('id_akun', true),
            "total" => $this->input->post('total', true),
            "metode_bayar" => $this->input->post('metode_bayar', true),
            "bukti_bayar" => $this->input->post('bukti_bayar', true),
            "status" => $this->input->post('status', true),
            "id" => $this->input->post('id', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'payment', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function getpaymentbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'payment', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    
    /* End of file payment_model.php */