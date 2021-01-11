<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // cek session
        if ($this->session->userdata('email')) {
            redirect('home');
        }
        // form validation rule
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // bekeng form validation
        if ($this->form_validation->run() == false) {
            # loding tampilan login
            $this->load->view('auth/v_login');
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // cek email ada or nda
        $user = $this->db->get_where('login', ['email' => $email])->row_array();

        // kalo email ada
        if ($user) {
            # cek email so aktif ato nda
            if ($user['is_active'] == 1) {
                # cek password
                if (password_verify($password, $user['password'])) {
                    # password sesuai | ambe depe email deng role id for session
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    // bekeng depe session
                    $this->session->set_userdata($data);
                    // kirim ka home kalo sudah dapa
                    redirect('home');
                    // else kalo password salah
                } else {
                    // bekeng flash data message mo tampilkan di login view
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah Bos!</div>');
                    redirect('auth');
                }
                //else kalo user nda aktif
            } else {
                //bekeng flash data -> message mo tampilkan di login view
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Aktif, Hubungi Admin neh!</div>');
                redirect('auth');
            }
            //else kalo user false
        } else {
            //bekeng flas data ulang
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">maaf email nda terdaftar, silahkan register dulu neh!</div>');
            redirect('auth');
        }
    }




    // method untuk register
    public function register()
    {
        // cek session
        if ($this->session->userdata('email')) {
            redirect('home');
        }

        // form validation rules
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[login.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        // form validation
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/v_register');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0
            ];
            $this->db->insert('login', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Yeaayy Kamu berhasil Keluar!</div>');
        redirect('auth');
    }
}
