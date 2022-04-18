<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihansatu extends CI_Controller {

    public function index(){
        echo "<h1>contoh 1</h1>";
    }
    //menggunakan controller
    public function biodatasatu(){
        echo "<h1>perkenalkan</h1>";
        echo "<br>";
        echo "nama : agus wahono";
    }
    //menggunakan controller dan view
    public function biodatadua(){
        
        $this->load->view('view_biodata');
    }

    public function biodatatiga(){
        $this->load->model('model_biodata');//panggil model
        $bio =$this->model_biodata->biodata();

        echo "<h1>perkenalkan</h1>";
        echo "<br>";
        echo "nama : " . $bio;
    }

    //menggunakan controller model dan view
    public function biodataempat(){
        $this->load->model('model_biodata');//model
        $data['bio'] =$this->model_biodata->biodata();

        $data['title'] = "form biodata";

       $this->load->view('view_biodata', $data); //view
    }

}