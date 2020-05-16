<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class tiket_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus-ci-admin/api/'
        ]);
    }

    public function getalltiket()
    {
        $response = $this->_client->request('GET', 'tiket', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    // public function hapusdatatiket($id)
    // {
    //     $response = $this->_client->request('DELETE', 'tiket', [
    //         'form_params' => [
    //             'id' => $id,
    //             'tkn' => 'qwe123'
    //         ]
    //     ]);

    //     $result = json_decode($response->getBody()->getContents(), true);
    //     return $result;
    // }

    // public function tambahdatatiket() // JS2 B3 no 3
    // {
    //     $data = [
    //         "nama" => $this->input->post('nama', true),
    //         "kota" => $this->input->post('kota', true),
    //         "alamat" => $this->input->post('alamat', true),
    //         'tkn' => 'qwe123'
    //     ];
    //     $response = $this->_client->request('POST', 'tiket', [
    //         'form_params' => $data
    //     ]);

    //     $result = json_decode($response->getBody()->getContents(), true);
    //     return $result;
    // }

    public function ubahdatatiket() // JS2 B3 no 3
    {
        $data = [
            "nama_penumpang" => $this->input->post('nama_penumpang', true),
            "no_ktp_penumpang" => $this->input->post('no_ktp_penumpang', true),
            "no_duduk" => $this->input->post('no_duduk', true),
            "id_akun" => $this->input->post('id_akun', true),
            "id_trayek" => $this->input->post('id_trayek', true),
            "id_payment" => $this->input->post('id_payment', true),
            "id_duduk" => $this->input->post('id_duduk', true),
            "id" => $this->input->post('id', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'tiket', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function gettiketbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'tiket', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    
    /* End of file tiket_model.php */