<?php
defined('BASEPATH') or exit('No direct script access allowed');

class General extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek session lewat helper
        is_logged_in();
    }

    public function index()
    {

        // ambe tu user da login pe data, ambe dari email
        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';

        $this->load->view('templates/headbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('general/v_dashboard', $data);
        $this->load->view('templates/footbar');
    }

    // method user start
    public function profile()
    {
        $data['title'] = 'Profile';
        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/headbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('general/v_user', $data);
        $this->load->view('templates/footbar');
    }
    // method user end

    // method dataPegawai start
    public function dataPegawai()
    {
        $data['title'] = 'Data Pegawai';
        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/headbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('general/v_dataPegawai', $data);
        $this->load->view('templates/footbar');
    }
    // method dataPegawai end


    // akhir class    
}
