<?php

class Hitung
{

    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function countItem($data1, $data2, $data3)
    {
        $this->ci->load->model('ModelData');
        return $this->ci->ModelData->count1($data1, $data2, $data3)->num_rows();
    }
    public function countall($table)
    {
        $this->ci->load->model('ModelData');
        return $this->ci->ModelData->countall($table)->num_rows();
    }
    public function countmore($data1, $data2, $data3)
    {
        $this->ci->load->model('ModelData');
        return $this->ci->ModelData->countmore($data1, $data2, $data3)->num_rows();
    }
}
