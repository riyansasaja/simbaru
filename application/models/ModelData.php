<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelData extends CI_Model
{
    public function caridata()
    {

        if ($this->input->post('key')) {
            $key = htmlspecialchars($this->input->post('key', true));
            $this->db->like('nip', $key);
            $this->db->or_like('nama', $key);
            $this->db->select('id_data, nip, nama, unor');
            return $this->db->get('v_nominatif')->result_array();
        } else {
            return null;
        }
    }

    public function showdetail($nip)
    {
        return $this->db->get_where('v_nominatif', ['nip' => $nip])->result_array();
    }
    public function showpendidikan($nip)
    {
        return $this->db->get_where('tb_riwayat_pendidikan', ['nip' => $nip])->result_array();
    }
    public function showpangkat($nip)
    {
        return $this->db->get_where('tb_riwayat_golongan', ['nip' => $nip])->result_array();
    }
    public function showjabatan($nip)
    {
        return $this->db->get_where('tb_riwayat_jabatan', ['nip' => $nip])->result_array();
    }
    public function showpendakhir($nip)
    {
        return $this->db->get_where('v_pendakhir', ['nip' => $nip])->result_array();
    }
}
