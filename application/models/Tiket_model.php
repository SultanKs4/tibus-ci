<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;

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

    public function transactionTiket($data)
    {
        $data = [
            "id_akun" => $data['id_akun'],
            "total" => $data['harga'],
            "metode_bayar" => $data['metode_bayar'],
            "status" => $data['status'],
            "nama_penumpang" => $data['nama_penumpang'],
            "no_ktp_penumpang" => $data['no_ktp_penumpang'],
            "no_duduk" => $data['no_duduk'],
            "id_trayek" => $data['id_trayek'],
            "id_duduk" => $data['id_duduk'],
            "id_po" => $data['id_po'],
            "dari" => $data['id_dari'],
            "tujuan" => $data['id_tujuan'],
            "jam_berangkat" => $data['jam_berangkat'],
            "jam_tiba" => $data['jam_tiba'],
            "tanggal_berangkat" => $data['tanggal_berangkat'],
            "tanggal_tiba" => $data['tanggal_tiba'],
            "harga" => $data['harga'],
            "sisa_kursi" => $data['sisa_kursi'],
            'tkn' => 'qwe123'
        ];
        try {
            $response = $this->_client->request('POST', 'tiket/trans', [
                'form_params' => $data
            ]);
        } catch (ServerException $th) {
            echo $th->getResponse()->getBody();
        }

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

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
