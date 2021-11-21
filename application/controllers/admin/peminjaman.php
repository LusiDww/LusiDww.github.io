<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman extends CI_Controller
{
    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $data['peminjaman'] = $this->model_peminjaman->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/peminjaman', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $Id_Peminjam   = $this->input->post('Id_Peminjam');
        $Nama          = $this->input->post('Nama');
        $NPM           = $this->input->post('NPM');
        $Prodi         = $this->input->post('Prodi');
        $Buku          = $this->input->post('Buku');
        $Tgl_Pinjam    = $this->input->post('Tgl_Pinjam');
        $Jumlah        = $this->input->post('Jumlah');
        $Harga         = $this->input->post('Harga');


        $data = array(
            'Id_Peminjam'   => $Id_Peminjam,
            'Nama'          => $Nama,
            'NPM'           => $NPM,
            'Prodi'         => $Prodi,
            'Buku'          => $Buku,
            'Tgl_Pinjam'    => $Tgl_Pinjam,
            'Jumlah'        => $Jumlah,
            'Harga'         => $Harga,
        );

        $this->model_peminjaman->tambah_peminjaman($data, 'peminjaman');
        redirect('admin/peminjaman/index');
    }

    public function edit($Id_Peminjam)
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $where = array('Id_Peminjam' => $Id_Peminjam);
        $data['peminjaman'] = $this->model_peminjaman->edit_peminjaman($where, 'peminjaman')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edit_peminjaman', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $Id_Peminjam   = $this->input->post('Id_Peminjam');
        $Nama          = $this->input->post('Nama');
        $NPM           = $this->input->post('NPM');
        $Prodi         = $this->input->post('Prodi');
        $Buku          = $this->input->post('Buku');
        $Tgl_Pinjam    = $this->input->post('Tgl_Pinjam');
        $Jumlah        = $this->input->post('Jumlah');
        $Harga         = $this->input->post('Harga');


        $data = array(
            'Id_Peminjam'   => $Id_Peminjam,
            'Nama'          => $Nama,
            'NPM'           => $NPM,
            'Prodi'         => $Prodi,
            'Buku'          => $Buku,
            'Tgl_Pinjam'    => $Tgl_Pinjam,
            'Jumlah'        => $Jumlah,
            'Harga'         => $Harga,
        );

        $where = array(
            'Id_Peminjam' => $Id_Peminjam
        );

        $this->model_peminjaman->update_peminjaman($where, $data, 'peminjaman');
        redirect('admin/peminjaman/index');
    }

    public function hapus($Id_Peminjam)
    {
        $where = array('Id_Peminjam' => $Id_Peminjam);
        $this->model_peminjaman->hapus_peminjaman($where, 'peminjaman');
        redirect('admin/peminjaman/index');
    }
}
