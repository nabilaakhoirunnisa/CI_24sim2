<?php

class hello extends CI_Controller{
    public function index()
    {
        $data['nama'] = "orang baik";
        $this->load->view('hello_view',$data);
    }
    public function namasaya()
    {
        $data['nama'] = "siapa";
        $this->load->view('hello_view',$data);
    }
}