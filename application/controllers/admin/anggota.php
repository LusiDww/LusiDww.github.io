<?php
defined('BASEPATH') or exit('No direct script access allowed');

class anggota extends CI_Controller
{
    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $data['anggota'] = $this->model_anggota->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/anggota', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $Id_Anggota = $this->input->post('Id_Anggota');
        $Nama       = $this->input->post('Nama');
        $NPM        = $this->input->post('NPM');
        $Prodi      = $this->input->post('Prodi');
        $Photo      = $_FILES['Photo']['name'];
        if ($Photo = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('Photo')) {
                echo "Foto gagal diupload !";
            } else {
                $Photo = $this->upload->data('file_name');
            }
        }


        $data = array(
            'Id_Anggota' => $Id_Anggota,
            'Nama'       => $Nama,
            'NPM'        => $NPM,
            'Prodi'      => $Prodi,
            'Photo'      => $Photo
        );

        $this->model_anggota->tambah_anggota($data, 'member');
        redirect('admin/anggota/index');
    }

    public function edit($Id_Anggota)
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $where = array('Id_Anggota' => $Id_Anggota);
        $data['anggota'] = $this->model_anggota->edit_anggota($where, 'member')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edit_anggota', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $Id_Anggota = $this->input->post('Id_Anggota');
        $Nama       = $this->input->post('Nama');
        $NPM        = $this->input->post('NPM');
        $Prodi      = $this->input->post('Prodi');

        $data = array(
            'Nama'       => $Nama,
            'NPM'        => $NPM,
            'Prodi'      => $Prodi
        );

        $where = array(
            'Id_Anggota' => $Id_Anggota
        );

        $this->model_anggota->update_anggota($where, $data, 'member');
        redirect('admin/anggota/index');
    }

    public function hapus($Id_Anggota)
    {
        $where = array('Id_Anggota' => $Id_Anggota);
        $this->model_anggota->hapus_anggota($where, 'member');
        redirect('admin/anggota/index');
    }
}
