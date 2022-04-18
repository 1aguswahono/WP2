<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller{

    //hanya menggunakan controller 
    public function index(){

        echo "selamat datnag..... selamat belajar wab programing";
    }

    public function penjumlahan(){
        $nilai1 = 10;
        $nilai2 = 20;

        $penjumlahan = $nilai1+$nilai2;

        echo "hasil penjumlahan". $nilai1." + ".$nilai2 ." = ". $penjumlahan;

    }
    //pakai model
    public function penjumlahan2(){

        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah();

        echo "hasil penjumlahan" . $hasil;
    }
    //pakai model dan parameter di method
    public function penjumlahan3( $n1,$n2){

        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah2($n1,$n2);

        echo "hasil penjumlahan" . $hasil;
    }
    //pakai model dan parameter di method dan view
    public function penjumlahan4( $n1,$n2){

        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah2($n1,$n2);

        $data['hasilnilai']= $hasil;

        $this->load->view('View_Latihan1', $data); 
    }
   

}