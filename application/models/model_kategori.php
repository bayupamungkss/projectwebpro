<?php

class Model_kategori extends CI_Model{
    
    public function data_alat_listrik(){
        return $this->db->get_where("tb_brg",array('kategori' => 'alat listrik'));
    }

    public function data_alat_rumah_tangga(){
        return $this->db->get_where("tb_brg",array('kategori' => 'alat rumah tangga'));
    }

    public function data_alat_bangunan(){
        return $this->db->get_where("tb_brg",array('kategori' => 'alat bangunan'));
    }
}