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
        $this->ci->load->model('modeldata');
        return $this->ci->modeldata->count1($data1, $data2, $data3)->num_rows();
    }
    public function countall($table)
    {
        $this->ci->load->model('modeldata');
        return $this->ci->modeldata->countall($table)->num_rows();
    }
    public function countmore($data1, $data2, $data3)
    {
        $this->ci->load->model('modeldata');
        return $this->ci->modeldata->countmore($data1, $data2, $data3)->num_rows();
    }
}
