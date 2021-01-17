<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $data['title'] = 'Upload Data';

        $this->load->view('templates/headbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/v_scanData', $data);
        $this->load->view('templates/footbar');
    }

    // method scandata start
    public function uploadData()
    {


        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Upload Data';

        $this->load->view('templates/headbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/v_scanData', $data);
        $this->load->view('templates/footbar');
    }
    // method scandata end

    // method masterData start
    public function masterData()
    {
        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Master Data';

        $this->load->view('templates/headbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/v_masterData', $data);
        $this->load->view('templates/footbar');
    }

    // method masterData finis

}
