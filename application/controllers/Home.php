<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

        $this->load->view('home/templates/headbar', $data);
        $this->load->view('home/templates/sidebar', $data);
        $this->load->view('home/templates/topbar', $data);
        $this->load->view('home/v_dashboard', $data);
        $this->load->view('home/templates/footbar');
    }
}
