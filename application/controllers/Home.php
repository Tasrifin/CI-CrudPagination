<?php

class Home extends CI_controller{
    public function index(){

        $data['judul'] = 'Halaman Home';
        $data1['judul'] = "Omah";
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}