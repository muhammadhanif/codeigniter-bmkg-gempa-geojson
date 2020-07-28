<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gempa extends CI_Controller
{
    private $_api_version;

    public function __construct()
    {
        parent::__construct();

        $this->_api_version = "v1";
    }

    public function m5Terkini()
    {
        $data['api_version'] = $this->_api_version;

        $this->load->view('gempa/m_5_terkini', $data);
    }

    public function m5()
    {
        $data['api_version'] = $this->_api_version;

        $this->load->view('gempa/m_5', $data);
    }

    public function dirasakan()
    {
        $data['api_version'] = $this->_api_version;

        $this->load->view('gempa/dirasakan', $data);
    }

    public function apiEndpoint()
    {
        $data['api_version'] = $this->_api_version;

        $this->load->view('gempa/api_endpoint', $data);
    }
}
