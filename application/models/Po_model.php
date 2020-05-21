<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Po_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus/public/api/'
        ]);
    }

    public function getallpo()
    {
        $response = $this->_client->request('GET', 'po', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusdatapo($id)
    {
        $response = $this->_client->request('DELETE', 'po', [
            'form_params' => [
                'id' => $id,
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahdatapo() // JS2 B3 no 3
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('POST', 'po', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahdatapo() // JS2 B3 no 3
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "id" => $this->input->post('id', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'po', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function getpobyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'po', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    
    /* End of file po_model.php */
