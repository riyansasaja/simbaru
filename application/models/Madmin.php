<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{

    public function getuser()
    {
        return $this->db->get('login')->result_array();
    }
}
