<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
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
}
