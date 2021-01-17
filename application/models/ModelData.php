<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelData extends CI_Model
{
    public function caridata()
    {

        if ($this->input->post('key')) {
            $key = htmlspecialchars($this->input->post('key', true));
            $this->db->like('tb_data_inti.nip', $key);
            $this->db->or_like('tb_data_inti.nama', $key);
            $this->db->select('tb_data_inti.id, tb_data_inti.nip, tb_data_inti.nama, tb_jabakhir.unor');
            $this->db->join('tb_jabakhir', 'tb_data_inti.nip = tb_jabakhir.nip');
            return $this->db->get('tb_data_inti')->result_array();
        } else {
            return null;
        }
    }

    public function showdetail($nip)
    {
        $this->db->select('tb_data_inti.nip, tb_data_inti.nip_lama, tb_data_inti.nama, tb_data_inti.gelar_depan, tb_data_inti.gelar_blk, tb_data_inti.tempat_lahir_nama, tb_data_inti.tgl_lahir, tb_data_inti.nik,  tb_data_inti.npwp_nomor,  tb_data_inti.kedudukan_hukum_nama, tb_data_inti.status_cpns_pns, tb_jabakhir.unor, tb_jabakhir.nama_jabatan, tb_jabakhir.id_eselon, tb_golakhir.golongan, tb_golakhir.pangkat, tb_golakhir.mkg_tahun, tb_golakhir.mkg_bulan');
        $this->db->join('tb_jabakhir', 'tb_data_inti.nip = tb_jabakhir.nip');
        $this->db->join('tb_golakhir', 'tb_jabakhir.nip = tb_golakhir.nip');
        return $this->db->get_where('tb_data_inti', ['tb_data_inti.nip' => $nip])->result_array();
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
    // public function showpendakhir($nip)
    // {
    //     return $this->db->get_where('v_pendakhir', ['nip' => $nip])->result_array();
    // }

    public function countdashboard()
    {
        return $this->db->get('v_dashboard');
    }
}
