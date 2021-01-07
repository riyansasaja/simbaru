<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/templates/headbar');
        $this->load->view('home/templates/sidebar');
        $this->load->view('home/templates/topbar');
        $this->load->view('home/v_dashboard');
        $this->load->view('home/templates/footbar');
    }
}
