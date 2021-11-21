<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas extends CI_Controller
{
    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->model_petugas->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/petugas', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $Id_Admin   = $this->input->post('Id_Admin');
        $Nama       = $this->input->post('Nama');
        $Email      = $this->input->post('Email');
        $Photo      = $_FILES['Photo']['name'];
        if ($Photo  = '') {
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
            'Id_Admin' => $Id_Admin,
            'Nama'     => $Nama,
            'Email'    => $Email,
            'Photo'    => $Photo
        );

        $this->model_petugas->tambah_petugas($data, 'admin');
        redirect('admin/petugas/index');
    }

    public function edit($Id_Admin)
    {
        $data['admin'] = $this->db->get_where('admin', ['Username' => $this->session->userdata('username')])->row_array();
        $where = array('Id_Admin' => $Id_Admin);
        $data['petugas'] = $this->model_petugas->edit_petugas($where, 'admin')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edit_petugas', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $Id_Admin   = $this->input->post('Id_Admin');
        $Nama       = $this->input->post('Nama');
        $Email      = $this->input->post('Email');

        $data = array(
            'Nama'       => $Nama,
            'Email'      => $Email,
        );

        $where = array(
            'Id_Admin' => $Id_Admin
        );

        $this->model_petugas->update_petugas($where, $data, 'admin');
        redirect('admin/petugas/index');
    }

    public function hapus($Id_Admin)
    {
        $where = array('Id_Admin' => $Id_Admin);
        $this->model_petugas->hapus_petugas($where, 'admin');
        redirect('admin/petugas/index');
    }
}
