<?php

class Hitung
{

    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function countItem()
    {
        $this->ci->load->model('modeldata');
        return $this->ci->modeldata->count1()->result_array();
    }
}
