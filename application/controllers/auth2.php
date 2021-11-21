<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Login';
            $this->load->view('templates_admin/header', $data);
            $this->load->view('admin/Login');
            $this->load->view('templates_admin/footer');
        } else {
            //validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $Username = $this->input->post('username');
        $Password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $Username])->row_array();

        //jika membernya ada
        if ($admin) {
            //cek password
            if (password_verify($Password, $admin['Password'])) {
                $data = [
                    'username' => $admin['Username'],
                    'password' => $admin['Password'],
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard_admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth2');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
            redirect('auth2');
        }
    }


    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[member.Email]', ['is_unique' => 'Email yang anda masukkan telah terdaftar!']);
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Registrasi';
            $this->load->view('templates_admin/header', $data);
            $this->load->view('admin/register');
            $this->load->view('templates_admin/footer');
        } else {
            $data = [
                'Username' => htmlspecialchars($this->input->post('username', true)),
                'Nama' => htmlspecialchars($this->input->post('name', true)),
                'Email' => htmlspecialchars($this->input->post('email', true)),
                'Password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'Photo' => 'default.jpg',
            ];

            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth2');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out! </div>');
        redirect('auth2');
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */