<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;

class Trayek_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus/public/api/'
        ]);
    }

    public function getalltrayek()
    {
        $response = $this->_client->request('GET', 'trayek', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusdatatrayek($id)
    {
        $response = $this->_client->request('DELETE', 'trayek', [
            'form_params' => [
                'id' => $id,
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }


    public function tambahdatatrayek() // JS2 B3 no 3
    {
        $data = [
            "id_po" => $this->input->post('id_po', true),
            "dari" => $this->input->post('dari', true),
            "tujuan" => $this->input->post('tujuan', true),
            "jam_berangkat" => $this->input->post('jam_berangkat', true),
            "jam_tiba" => $this->input->post('jam_tiba', true),
            "tanggal_berangkat" => $this->input->post('tanggal_berangkat', true),
            "tanggal_tiba" => $this->input->post('tanggal_tiba', true),
            "harga" => $this->input->post('harga', true),
            "sisa_kursi" => $this->input->post('sisa_kursi', true),
            'tkn' => 'qwe123'
        ];
        try {
            $response = $this->_client->request('POST', 'trayek', [
                'form_params' => $data
            ]);
        } catch (ServerException $th) {
            echo $th->getResponse()->getBody();
            die();
        }

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahdatatrayek() // JS2 B3 no 3
    {
        $data = [
            "id_po" => $this->input->post('id_po', true),
            "dari" => $this->input->post('dari', true),
            "tujuan" => $this->input->post('tujuan', true),
            "jam_berangkat" => $this->input->post('jam_berangkat', true),
            "jam_tiba" => $this->input->post('jam_tiba', true),
            "tanggal_berangkat" => $this->input->post('tanggal_berangkat', true),
            "tanggal_tiba" => $this->input->post('tanggal_tiba', true),
            "harga" => $this->input->post('harga', true),
            "id" => $this->input->post('id', true),
            "sisa_kursi" => $this->input->post('sisa_kursi', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'trayek', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function gettrayekbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'trayek', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function searchTrayek($dari, $tujuan, $tanggal)
    {
        $response = $this->_client->request('GET', 'trayek/search', [
            'query' => [
                'tkn' => 'qwe123',
                'dari' => $dari,
                'tujuan' => $tujuan,
                'tanggal' => $tanggal,
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    /* End of file trayek_model.php */
