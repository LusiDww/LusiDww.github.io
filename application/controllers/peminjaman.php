<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman extends CI_Controller
{
    public function index()
    {
        $data['member'] = $this->db->get_where('member', ['Username' => $this->session->userdata('username')])->row_array();
        $data['peminjaman'] = $this->model_peminjaman->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('member/peminjaman', $data);
        $this->load->view('templates/footer');
    }
}
