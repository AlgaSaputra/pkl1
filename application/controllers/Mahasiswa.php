<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->data['title'] = 'List of Mahasiswa';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        $this->load->view('mahasiswa/index', $data);
    }

    public function tambah()
    {
        $this->data['title'] = 'add student data';

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('mahasiswa/tambah');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($nim)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($nim);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mahasiswa');
    }

    public function edit($nim)
    {
        $this->data['title'] = 'change student data';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByNim($nim);

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('mahasiswa/edit', $data);
        } else {
            $this->Mahasiswa_model->editDataMahasiswa();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mahasiswa');
        }
    }
}
