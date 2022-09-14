<?php
class Homerakha extends CI_Controller{
    public function index()
    {
        $this->load->view('frondend/headerrakha'); 
        $this->load->view('frondend/homerakha'); 
        $this->load->view('frondend/footerrakha'); 
    }
}

?>