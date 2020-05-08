<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class booking_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus-ci-admin/api/'
        ]);
    }

    public function getallbooking()
    {
        $response = $this->_client->request('GET', 'booking', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusdatabooking($id)
    {
        $response = $this->_client->request('DELETE', 'booking', [
            'form_params' => [
                'id' => $id,
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahdatabooking() // JS2 B3 no 3
    {
        $data = [
            "name" => $this->input->post('name', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('POST', 'booking', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahdatabooking() // JS2 B3 no 3
    {
        $data = [
            "name" => $this->input->post('name', true),
            "id" => $this->input->post('id', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'booking', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function getbookingbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'booking', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    
    /* End of file booking_model.php */
