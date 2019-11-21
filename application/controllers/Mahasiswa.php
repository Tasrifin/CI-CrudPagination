<?php
    class Mahasiswa extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $data['judul']='Daftar Mahasiswa';
            $data['mahasiswa']= $this->Mahasiswa_model->getAllMahasiswa();
            if( $this->input->post('keyword')){
                $data['mahasiswa']=$this->Mahasiswa_model->cariDataMHS();
            }
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/index');
            $this->load->view('templates/footer');
        }

        public function tambah()
        {
            $data['judul']='Tambah Data Mahasiswa';

            $this->form_validation->set_rules('nama','Nama', 'required');
            $this->form_validation->set_rules('nim','NIM', 'required|numeric');
            $this->form_validation->set_rules('email','E-Mail', 'required|valid_email');


            if( $this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('mahasiswa/tambah');
                $this->load->view('templates/footer');              
            }else{
                $this->Mahasiswa_model->tambahDataMHS();
                $this->session->set_flashdata('flash','ditambah');
                redirect('mahasiswa');
            }
            
        }

        public function hapus($id)
        {
            $this->Mahasiswa_model->hapusDataMHS($id);
            $this->session->set_flashdata('flash','dihapus');
            redirect('mahasiswa');
        }

        public function detail($id)
        {
            $data['judul']='Detail Data Mahasiswa';
            $data['mahasiswa']= $this->Mahasiswa_model->getMahasiswaById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/detail', $data);
            $this->load->view('templates/footer');
        }

        public function edit($id)
        {
            $data['judul']='Edit Data Mahasiswa';
            $data['mahasiswa']=$this->Mahasiswa_model->getMahasiswaById($id);
            $data['jurusan']=['Informatika','Sistem Komputer','Sistem Informasi','Arsitektur'];

            $this->form_validation->set_rules('nama','Nama', 'required');
            $this->form_validation->set_rules('nim','NIM', 'required|numeric');
            $this->form_validation->set_rules('email','E-Mail', 'required|valid_email');


            if( $this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('mahasiswa/edit', $data);
                $this->load->view('templates/footer');              
            }else{
                $this->Mahasiswa_model->editDataMHS();
                $this->session->set_flashdata('flash','diedit');
                redirect('mahasiswa');
            }
            
        }
    }