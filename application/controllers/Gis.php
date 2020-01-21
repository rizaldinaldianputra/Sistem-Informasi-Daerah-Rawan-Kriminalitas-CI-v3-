<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('googlemaps'));
        $this->load->model('m_gis');
    }

    public function index()
    {
        $this->load->library('googlemaps');
        $config['center'] = '-6.622620, 106.777191';
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);

        $kejahatan = $this->m_gis->datakejahatan();
        foreach ($kejahatan as $key => $value) {

            $config['center'] = '37.4419, -122.1419';
            $config['zoom'] = 'auto';
            $config['places'] = TRUE;
            $config['placesAutocompleteInputID'] = 'myPlaceTextBox';
            $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
            $config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';

            $marker = array();
            $marker['animation'] = 'DROP';
            $marker['position'] = "$value->latitude, $value->longitude";

            $this->load->library('googlemaps');




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
        $this->load->view('v_home', $data, FALSE);
    }


    public function datakejahatan()
    {
        $kejahatan = $this->m_gis->datakejahatan();
        $map = $this->googlemaps->create_map();
        $data = array(
            'map'       => $map,
            'kejahatan' => $kejahatan
        );
        $this->load->view('v_homedata', $data, FALSE);
    }
    public function grapik()
    {
        $data['graph'] = $this->m_gis->graph();
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('chart', $data);
    }
}
