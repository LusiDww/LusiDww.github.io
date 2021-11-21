<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengembalian extends CI_Controller
{
    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $data['pengembalian'] = $this->model_pengembalian->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/pengembalian', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $Id_Pengembalian    = $this->input->post('Id_Pengembalian');
        $Nama               = $this->input->post('Nama');
        $NPM                = $this->input->post('NPM');
        $Prodi              = $this->input->post('Prodi');
        $Buku               = $this->input->post('Buku');
        $Tgl_Peminjaman     = $this->input->post('Tgl_Peminjaman');
        $Tgl_Pengembalian   = $this->input->post('Tgl_Pengembalian');
        $Jumlah             = $this->input->post('Jumlah');


        $data = array(
            'Id_Pengembalian'    => $Id_Pengembalian,
            'Nama'               => $Nama,
            'NPM'                => $NPM,
            'Prodi'              => $Prodi,
            'Buku'               => $Buku,
            'Tgl_Peminjaman'     => $Tgl_Peminjaman,
            'Tgl_Pengembalian'   => $Tgl_Pengembalian,
            'Jumlah'             => $Jumlah,
        );

        $this->model_pengembalian->tambah_pengembalian($data, 'pengembalian');
        redirect('admin/pengembalian/index');
    }

    public function edit($Id_Pengembalian)
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $where = array('Id_Pengembalian' => $Id_Pengembalian);
        $data['pengembalian'] = $this->model_pengembalian->edit_pengembalian($where, 'pengembalian')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edit_pengembalian', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $Id_Pengembalian    = $this->input->post('Id_Pengembalian');
        $Nama               = $this->input->post('Nama');
        $NPM                = $this->input->post('NPM');
        $Prodi              = $this->input->post('Prodi');
        $Buku               = $this->input->post('Buku');
        $Tgl_Peminjaman     = $this->input->post('Tgl_Peminjaman');
        $Tgl_Pengembalian   = $this->input->post('Tgl_Pengembalian');
        $Jumlah             = $this->input->post('Jumlah');


        $data = array(
            'Id_Pengembalian'    => $Id_Pengembalian,
            'Nama'               => $Nama,
            'NPM'                => $NPM,
            'Prodi'              => $Prodi,
            'Buku'               => $Buku,
            'Tgl_Peminjaman'     => $Tgl_Peminjaman,
            'Tgl_Pengembalian'   => $Tgl_Pengembalian,
            'Jumlah'             => $Jumlah,
        );

        $where = array(
            'Id_Pengembalian' => $Id_Pengembalian
        );

        $this->model_pengembalian->update_pengembalian($where, $data, 'pengembalian');
        redirect('admin/pengembalian/index');
    }

    public function hapus($Id_Pengembalian)
    {
        $where = array('Id_Pengembalian' => $Id_Pengembalian);
        $this->model_pengembalian->hapus_pengembalian($where, 'pengembalian');
        redirect('admin/pengembalian/index');
    }
}
