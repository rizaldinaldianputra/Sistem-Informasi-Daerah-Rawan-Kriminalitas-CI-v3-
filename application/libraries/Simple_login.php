<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simple_login
{
    protected $CI;

    public function  __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model("M_login");
    }

    public function login($username, $password)
    {
        $check = $this->CI->M_login->login($username, $password);

        // jika login maka data sesasion
        if ($check) {
            $id = $check->id;
            $username = $check->username;

            // buat session
            $this->CI->session->set_userdata('id', $id);
            $this->CI->session->set_userdata('username', $username);
            // Redurect ke halaman admin
            redirect(base_url('admin'), 'refresh');
        } else {
            $this->CI->session->set_flashdata('warning', 'Username / Password Salah, Silahkan Cek Kembali');
            redirect(base_url('login'), 'refresh');
        }
    }

    public function cek_login()
    {
        if ($this->CI->session->userdata('username') == "") {
            $this->CI->session->set_flashdata('warning', 'Silahkan Login Terlebih dahulu');
            redirect(base_url('login'), 'refresh');
        }
    }

    public function logout()
    {
        //membuat semua session telah di buat saat login
        $this->CI->session->unset_userdata('id');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->set_flashdata('sukses', 'Anda telah logout');
        $this->CI->session->userdata('username') == "";
        $this->CI->session->userdata('password') == "";
        redirect(base_url('login'), 'refresh');
    }
}
