<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buku extends CI_Controller
{
    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/buku', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $Id_Buku        = $this->input->post('Id_Buku');
        $Judul          = $this->input->post('Judul');
        $Penulis        = $this->input->post('Penulis');
        $Penerbit       = $this->input->post('Penerbit');
        $Tahun          = $this->input->post('Tahun');
        $Jumlah         = $this->input->post('Jumlah');
        $Dipinjam       = $this->input->post('Dipinjam');
        $Harga          = $this->input->post('Harga');
        $Photo          = $_FILES['Photo'];
        if ($Photo = '') {
        } else {
            $config['upload_path'] = './assets/img/buku/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('Photo')) {
                echo "Foto gagal diupload !";
            } else {
                $Photo = $this->upload->data('file_name');
            }
        }


        $data = array(
            'Id_Buku'   => $Id_Buku,
            'Judul'     => $Judul,
            'Penulis'   => $Penulis,
            'Penerbit'  => $Penerbit,
            'Tahun'     => $Tahun,
            'Jumlah'    => $Jumlah,
            'Dipinjam'  => $Dipinjam,
            'Harga'     => $Harga,
            'Photo'     => $Photo
        );

        $this->model_buku->tambah_buku($data, 'buku');
        redirect('admin/buku/index');
    }

    public function edit($Id_Buku)
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $where = array('Id_Buku' => $Id_Buku);
        $data['buku'] = $this->model_buku->edit_buku($where, 'buku')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edit_buku', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $Id_Buku        = $this->input->post('Id_Buku');
        $Judul          = $this->input->post('Judul');
        $Penulis        = $this->input->post('Penulis');
        $Penerbit       = $this->input->post('Penerbit');
        $Tahun          = $this->input->post('Tahun');
        $Jumlah         = $this->input->post('Jumlah');
        $Dipinjam       = $this->input->post('Dipinjam');
        $Harga          = $this->input->post('Harga');

        $data = array(
            'Judul'         => $Judul,
            'Penulis'       => $Penulis,
            'Penerbit'      => $Penerbit,
            'Tahun'         => $Tahun,
            'Jumlah'        => $Jumlah,
            'Dipinjam'      => $Dipinjam,
            'Harga'         => $Harga,
        );

        $where = array(
            'Id_Buku' => $Id_Buku
        );

        $this->model_buku->update_buku($where, $data, 'buku');
        redirect('admin/buku/index');
    }

    public function hapus($Id_Buku)
    {
        $where = array('Id_Buku' => $Id_Buku);
        $this->model_buku->hapus_buku($where, 'buku');
        redirect('admin/buku/index');
    }
}
