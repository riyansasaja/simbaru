<?php
defined('BASEPATH') or exit('No direct script access allowed');

class General extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');

        // cek session lewat helper
        is_logged_in();
        $this->load->model('modeldata');
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
    // method edituser start
    public function editProfile()
    {
        $data['title'] = 'edit Profile';
        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/headbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('general/v_edituser', $data);
        $this->load->view('templates/footbar');
    }
    // method edituser end

    // method dataPegawai start
    public function dataPegawai()
    {

        $data['title'] = 'Data Pegawai';
        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $data['searchresult'] = $this->modeldata->caridata();
        $this->load->view('templates/headbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('general/v_dataPegawai', $data);
        $this->load->view('templates/footbar');
    }
    // method dataPegawai end

    public function detail($nip)
    {
        $data['title'] = 'Data Pegawai';
        $data['user'] =  $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->modeldata->showdetail($nip);
        $data['pendidikan'] = $this->modeldata->showpendidikan($nip);
        $data['pangkat'] = $this->modeldata->showpangkat($nip);
        $data['jabatan'] = $this->modeldata->showjabatan($nip);
        $data['pendakhir'] = $this->modeldata->showpendakhir($nip);

        $this->load->view('templates/headbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('general/v_detailpegawai', $data);
        $this->load->view('templates/footbar');
    }


    // akhir class    
}
