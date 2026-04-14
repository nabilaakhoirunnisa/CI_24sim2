<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['anggota'] = $this->Anggota_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    // ================= TAMBAH =================
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nomor_anggota', 'Nomor Anggota', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = [
                'Nomor_Anggota' => $this->input->post('nomor_anggota'),
                'Nama'          => $this->input->post('nama'),
                'Alamat'        => $this->input->post('alamat'),
                'Telepon'       => $this->input->post('telepon'),
                'Email'         => $this->input->post('email'),
                'Tanggal_Daftar'=> $this->input->post('tanggal_daftar'),
                'Status'        => $this->input->post('status'),
            ];

            $this->Anggota_model->insert($data);
            $this->session->set_flashdata('success', 'Data anggota berhasil ditambahkan');
            redirect('anggota');
        }
    }

    // ================= HAPUS =================
    public function hapus($id)
    {
        $this->Anggota_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('anggota');
    }

    // ================= EDIT =================
    public function edit($id)
    {
        $data['anggota'] = $this->Anggota_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nomor_anggota', 'Nomor Anggota', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'Nomor_Anggota' => $this->input->post('nomor_anggota'),
                'Nama'          => $this->input->post('nama'),
                'Alamat'        => $this->input->post('alamat'),
                'Telepon'       => $this->input->post('telepon'),
                'Email'         => $this->input->post('email'),
                'Tanggal_Daftar'=> $this->input->post('tanggal_daftar'),
                'Status'        => $this->input->post('status'),
            ];

            $this->Anggota_model->update($id, $data);
            $this->session->set_flashdata('success', 'Data berhasil diupdate');
            redirect('anggota');
        }
    }
}