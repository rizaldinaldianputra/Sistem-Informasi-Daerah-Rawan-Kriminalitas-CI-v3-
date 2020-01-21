<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->library(array('googlemaps'));
        $this->load->model('m_gis');
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
    }

    public function index()
    {
        $this->load->library('googlemaps');
        $config['center'] = '-6.622620, 106.777191';
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);

        $kejahatan = $this->m_gis->datakejahatan();
        foreach ($kejahatan as $key => $value) {
            $marker = array();
            $marker['animation'] = 'DROP';
            $marker['position'] = "$value->latitude, $value->longitude";
            $marker['infowindow_content']  = '<div class="media" stlye="width:300px;">';
            $marker['infowindow_content'] .= '<div class="media-left">';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '<div class="media-body">';
            $marker['infowindow_content'] .= '<h5 class="media-heading">' . $value->jenis_kejahatan . '</h5>';
            $marker['infowindow_content'] .= '<a>' . $value->alamat . ' </a><br>';
            $marker['infowindow_content'] .= '<a>' . $value->keterangan . ' </a><br>';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '</div>';


            if ($value->jenis_kejahatan == 'Pencurian') {
                $marker['icon'] = base_url('assets/icon/marker_pencurian.png');
            } else if ($value->jenis_kejahatan == 'Penculikan') {
                $marker['icon'] = base_url('assets/icon/marker_penculikan.png');
            } elseif ($value->jenis_kejahatan == 'Narkoba') {
                $marker['icon'] = base_url('assets/icon/marker_narkoba.png');
            } elseif ($value->jenis_kejahatan == 'Pembunuhan') {
                $marker['icon'] = base_url('assets/icon/marker_pembunuhan.png');
            } elseif ($value->jenis_kejahatan == 'Pemerkosaan') {
                $marker['icon'] = base_url('assets/icon/marker_pemerkosaan.png');
            };
            $this->googlemaps->add_marker($marker);

            $this->googlemaps->add_marker($marker);


            $circle = array();
            $circle['center'] =  "$value->latitude, $value->longitude";
            $circle['radius'] = '200';

            if ($value->jenis_kejahatan == 'Pencurian') {
                $circle['fillColor'] = 'red';
            } else if ($value->jenis_kejahatan == 'Penculikan') {
                $circle['fillColor'] = 'blue';
            } elseif ($value->jenis_kejahatan == 'Narkoba') {
                $circle['fillColor'] = 'yellow';
            } elseif ($value->jenis_kejahatan == 'Pembunuhan') {
                $circle['fillColor'] = 'green';
            } elseif ($value->jenis_kejahatan == 'Pemerkosaan') {
                $circle['fillColor'] = 'cyan';
            };

            $this->googlemaps->add_circle($circle);
        }

        $this->googlemaps->initialize($config);

        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('v_admin', $data, FALSE);
    }

    public function inputkejahatan()
    {
        //menampilkan peta lokasi
        $this->load->library('googlemaps');
        $config['center'] = '-6.622620, 106.777191';
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);
        $marker['position'] = '-6.622620, 106.777191';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setMapToForm(event.latLng.lat(),event.latLng.lng());';
        $this->googlemaps->add_marker($marker);



        //validasi input    
        $valid = $this->form_validation;
        $valid->set_rules('jenis_kejahatan', 'Jenis Kejahatan', 'required', array('required' => '%s Harus Di isi'));
        if ($valid->run() == FALSE) {
            $data['map'] = $this->googlemaps->create_map();
            $this->load->view('v_inputkejahatan', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'jenis_kejahatan' => $i->post('jenis_kejahatan'),
                'alamat' => $i->post('alamat'),
                'tanggal' => $i->post('tanggal'),
                'latitude' => $i->post('latitude'),
                'longitude' => $i->post('longitude'),
                'keterangan' => $i->post('keterangan')
            );
            $this->m_gis->tambah($data);
            $this->session->set_flashdata('sukses', ' data berhasil di tambahkan');
            redirect(base_url('admin/inputkejahatan'), 'refresh');
        }
    }

    public function datakejahatan()
    {
        $kejahatan = $this->m_gis->datakejahatan();
        $map = $this->googlemaps->create_map();
        $data = array(
            'map'       => $map,
            'kejahatan' => $kejahatan
        );
        $this->load->view('v_datakejahatan', $data, FALSE);
    }

    public function delete($id)
    {
        $data = array('id_kejahatan' => $id);
        $this->m_gis->delete($data);
        $this->session->set_flashdata('sukses', 'berhasil di hapus..!!');
        redirect(base_url('admin/datakejahatan'), 'refresh');
    }

    public function update($id)
    {
        //menampilkan peta lokasi
        $this->load->library('googlemaps');
        $config['center'] = '-6.622620, 106.777191';
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);
        $marker['position'] = '-6.622620, 106.777191';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setMapToForm(event.latLng.lat(),event.latLng.lng());';
        $this->googlemaps->add_marker($marker);

        //validasi input  
        $kejahatan = $this->m_gis->detail($id);
        $valid = $this->form_validation;
        $valid->set_rules('jenis_kejahatan', 'Jenis Kejahatan', 'required', array('required' => '%s Harus Di isi'));

        if ($valid->run() == FALSE) {
            $map = $this->googlemaps->create_map();
            $data = array(
                'map'       => $map,
                'kejahatan' => $kejahatan
            );
            $this->load->view('v_updatekejahatan', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'id_kejahatan' => $id,
                'jenis_kejahatan' => $i->post('jenis_kejahatan'),
                'alamat' => $i->post('alamat'),
                'tanggal' => $i->post('tanggal'),
                'latitude' => $i->post('latitude'),
                'longitude' => $i->post('longitude'),
                'keterangan' => $i->post('keterangan')
            );
            $this->m_gis->update($data);
            $this->session->set_flashdata('sukses', ' data berhasil diperbarui');
            redirect(base_url('admin/datakejahatan'), 'refresh');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('name', 'NAME', 'required');
        $this->form_validation->set_rules('username', 'USERNAME', 'required');
        $this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required');
        $this->form_validation->set_rules('password_conf', 'PASSWORD', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('v_register');
        } else {

            $data['nama']   =    $this->input->post('name');
            $data['username'] =    $this->input->post('username');
            $data['email']  =    $this->input->post('email');
            $data['password'] =    ($this->input->post('password'));

            $data2['No_ID']   =    $this->input->post('No_ID');
            $data2['nama']   =    $this->input->post('name');
            $data2['Alamat'] =    $this->input->post('Alamat');
            $data2['tanggal_lahir']  =  $this->input->post('tanggal_lahir');
            $data2['No_Handphone'] =    $this->input->post('No_Handphone');
            $data2['Jenis_Kelamin'] =    $this->input->post('Jenis_Kelamin');

            $this->m_gis->daftar($data);
            $this->m_gis->daftar2($data2);

            $pesan['message'] =    "Pendaftaran berhasil";
            $this->load->view('v_success', $pesan);
        }
    }
}
