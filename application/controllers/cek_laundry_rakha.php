<?php

class Cek_laundry_rakha extends CI_Controller{
    public function index()
    {
        $this->load->view('frondend/headerrakha');
        $this->load->view('frondend/cek_laundry');
        $this->load->view('frondend/footerrakha');
    }
}

?>