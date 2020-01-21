<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library(array('googlemaps'));
        $this->load->model('m_gis');
    }
    public function index()
    {
        $valid = $this->form_validation;
        $valid->set_rules('username', 'Username', 'required', array('required' => '%s harus di isi'));
        $valid->set_rules('password', 'password', 'required', array('required' => '%s harus di isi'));

        if ($valid->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->simple_login->login($username, $password);
        }
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('v_login', $data, FALSE);
    }

    public function logout()
    {
        $this->simple_login->logout();
    }
}
