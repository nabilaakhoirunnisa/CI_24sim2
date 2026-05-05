<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class buku extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->model('kategori_model');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['buku'] = $this->buku_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/indexb', $data);
        $this->load->view('templates/footer');

    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('buku/tambahb',$data);
        $this->load->view('templates/footer');
    }
    public function simpan()
    {
        $data= [
            'kode_buku'=> $this->input->post('kode_buku'),
                'judul'=>$this->input->post('judul'),
                'penulis'=> $this->input->post('penulis'),
                'penerbit'=> $this->input->post('penerbit'),
                'tahun'=> $this->input->post('tahun'),
                'kategori'=> $this->input->post('kategori'),
                'stok'=> $this->input->post('stok'),
                'lokasi_rak'=> $this->input->post('lokasi_rak'),
        ];
        $this->session->set_flashdata('swal', [
            'icon' => 'success',
            'title' => 'Berhasil!',
            'text' => 'Data berhasil ditambahkan'
        ]);
        
        

        $this->buku_model->insert($data);
        redirect('buku');
    }
    public function hapus($id)
    {
        // if($this->Kategori_model->is_used($id)){
            // $this->session->set_flashdata('error','Kategori tidak bisa dihapus karena masih digunakan');
        // }else {
            $this->buku_model->delete($id);
            $this->session->set_flashdata('swal', [
                'icon' => 'success',
                'title' => 'Dihapus!',
                'text' => 'Data berhasil dihapus'
            ]);
        // }
        redirect('buku');
    }
    public function edit($id)
    {
        $data['buku'] = $this->buku_model->get_by_id($id);
        $data['kategori'] = $this->kategori_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/editb',$data);
        $this->load->view('templates/footer');

    }
    public function update($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','Judul','required');
        if($this->form_validation->run()==FALSE){

        }else{
            $data=[
                'judul'=>$this->input->post('judul'),
                'penulis'=> $this->input->post('penulis'),
                'penerbit'=> $this->input->post('penerbit'),
                'tahun'=> $this->input->post('tahun'),
                'kategori'=> $this->input->post('kategori'),
                'stok'=> $this->input->post('stok'),
                'lokasi_rak'=> $this->input->post('lokasi_rak'),

            ];
            $this->buku_model->update($id,$data);
            $this->session->set_flashdata('succes','Data Berhasil Di Update');
            redirect('buku');
        }
    }
}