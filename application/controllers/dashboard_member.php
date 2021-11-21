<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['member'] = $this->db->get_where('member', ['Username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('member/dashboard');
        $this->load->view('templates/footer');
    }

    public function myprofile()
    {
        $data['title'] = 'Edit Profile';
        $data['member'] = $this->db->get_where('member', ['Username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('member/profile', $data);
            $this->load->view('templates/footer');
        } else {
            $Username = $this->input->post('username');
            $Nama = $this->input->post('fullName');
            $NPM = $this->input->post('NPM');
            $Prodi = $this->input->post('prodi');
            $Email = $this->input->post('Email');

            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['Photo'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '22048';
                $config['upload_path']   = './assets/img/profil/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('Photo')) {
                    $old_image = $data['member']['Photo'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('Photo', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('Username', $Username);
            $this->db->set('Nama', $Nama);
            $this->db->set('NPM', $NPM);
            $this->db->set('Prodi', $Prodi);
            $this->db->set('Email', $Email);
            $this->db->where('Username', $Username);
            $this->db->update('member');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data profil telah berhasil diubah! </div>');
            redirect('dashboard_member/myprofile');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Ubah Password';
        $data['member'] = $this->db->get_where('member', ['Username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_rules('newpassword', 'newpassword', 'required|trim|min_length[5]|matches[renewpassword]');
        $this->form_validation->set_rules('renewpassword', 'renewpassword', 'required|trim|min_length[5]|matches[newpassword]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('member/profile', $data);
            $this->load->view('templates/footer');
        } else {
            $password = $this->input->post('password');
            $newpassword = $this->input->post('newpassword');
            if (!password_verify($password, $data['member']['Password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah! </div>');
                redirect('dashboard_member/changePassword');
            } else {
                if ($password == $newpassword) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password sebelumnya! </div>');
                    redirect('dashboard_member/changePassword');
                } else {
                    //password benar
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);

                    $this->db->set('Password', $password_hash);
                    $this->db->where('Username', $this->session->userdata('username'));
                    $this->db->update('member');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah! </div>');
                    redirect('dashboard_member/changePassword');
                }
            }
        }
    }
}
