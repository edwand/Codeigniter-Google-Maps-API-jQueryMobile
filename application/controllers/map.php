<?php

class Map extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('head');
        $this->load->view('page');
        $this->load->view('foot');
    }
    function loadPeta(){
        $alamat = $this->input->post("alamat", true);
        $title = $this->input->post("title", true);
        $deskripsi = $this->input->post("deskripsi", true);
        $this->load->library('GMap');

        $this->gmap->GoogleMapAPI();

        $this->gmap->setMapType('hybrid'); //hybrid, satellite, terrain, map

        $this->gmap->addMarkerByAddress($alamat, $title, $deskripsi);

        $data['headerjs'] = $this->gmap->getHeaderJS();
        $data['headermap'] = $this->gmap->getMapJS();
        $data['onload'] = $this->gmap->printOnLoad();
        $data['map'] = $this->gmap->printMap();
        $data['sidebar'] = $this->gmap->printSidebar();

        $this->load->view('template', $data);
    }

}
?>
