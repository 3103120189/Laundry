<?php 
class Dashboardrakha extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard_rakha');
    }

    public function index()
    {
        $this->m_squrity_rakha->getSqurity();

        $isi['content'] = 'backend/homerakha';
        $isi['judul'] = 'Dashboardrakha';
        $isi['total_konsumen'] = $this->m_dashboard_rakha->total_konsumen();
        $isi['transaksi_baru'] = $this->m_dashboard_rakha->transaksi_baru();
        $isi['total_transaksi'] = $this->m_dashboard_rakha->total_transaksi();
        $this->load->view('backend/dashboardrakha',$isi);
    }
}

?>