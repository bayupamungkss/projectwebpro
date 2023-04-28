<?php

class kategori extends ci_controller{
    public function alat_listrik()
    {
        $data['alat_listrik'] = $this->model_kategori->data_alat_listrik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_listrik', $data);
        $this->load->view('templates/footer');
    }

    public function alat_rumah_tangga()
    {
        $data['alat_rumah_tangga'] = $this->model_kategori->data_alat_rumah_tangga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_rumah_tangga', $data);
        $this->load->view('templates/footer');
    }

    public function alat_bangunan()
    {
        $data['alat_bangunan'] = $this->model_kategori->data_alat_bangunan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_bangunan', $data);
        $this->load->view('templates/footer');
    }    
}