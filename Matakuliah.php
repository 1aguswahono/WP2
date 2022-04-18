<?php

class Matakuliah extends CI_Controller {

    public function index(){

        $this->load->view('View_form_matakuliah');
    }

    public function cetak()
    {
        $kode =$this->input->post('kode',TRUE);
        $nama =$this->input->post('nama',TRUE);
        $sks =$this->input->post('sks',TRUE);

        $data =[
            'kode'=>$kode,
            'nama'=>$nama,
            'sks'=>$sks,
        ];

        $this->load->view('View_data_matakuliah',$data);
    }

}