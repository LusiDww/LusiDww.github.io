<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buku extends CI_Controller
{
    public function index()
    {
        $data['member'] = $this->db->get_where('member', ['Username' => $this->session->userdata('username')])->row_array();
        $data['buku'] = $this->model_buku->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('member/buku', $data);
        $this->load->view('templates/footer');
    }

    public function tampil()
    {
        $data['member'] = $this->db->get_where('member', ['Username' => $this->session->userdata('username')])->row_array();
        $data['peminjaman'] = $this->model_formpinjam->tampil_data()->result();


        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('member/form_peminjaman', $data);
        $this->load->view('templates/footer');
    }

    public function form_peminjaman()
    {
        $Nama         = $this->input->post('Nama');
        $NPM          = $this->input->post('NPM');
        $Prodi        = $this->input->post('Prodi');
        $Buku         = $this->input->post('Buku');
        $Tgl_Pinjam   = $this->input->post('Tgl_Pinjam');
        $Jumlah       = $this->input->post('Jumlah');
        $Harga        = $this->input->post('Harga');

        $data = array(
            'Nama'          => $Nama,
            'NPM'           => $NPM,
            'Prodi'         => $Prodi,
            'Buku'          => $Buku,
            'Tgl_Pinjam'    => $Tgl_Pinjam,
            'Jumlah'        => $Jumlah,
            'Harga'         => $Harga,
        );

        $this->model_formpinjam->tambah($data, 'peminjaman');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Proses peminjaman buku telah berhasil!</div>');
        redirect('buku/tampil');
    }

    public function update()
    {
        $Nama         = $this->input->post('Nama');
        $NPM          = $this->input->post('NPM');
        $Prodi        = $this->input->post('Prodi');
        $Buku         = $this->input->post('Buku');
        $Tgl_Pinjam   = $this->input->post('Tgl_Pinjam');
        $Jumlah       = $this->input->post('Jumlah');
        $Harga        = $this->input->post('Harga');

        $data = array(
            'Nama'          => $Nama,
            'NPM'           => $NPM,
            'Prodi'         => $Prodi,
            'Buku'          => $Buku,
            'Tgl_Pinjam'    => $Tgl_Pinjam,
            'Jumlah'        => $Jumlah,
            'Harga'         => $Harga,
        );

        $where = array(
            'NPM' => $NPM
        );

        $this->model_formpinjam->update($where, $data, 'peminjaman');
        redirect('buku/index');
    }
}
