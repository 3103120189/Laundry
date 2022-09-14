<?php
class Paketrakha extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paket_rakha');
    }
    public function index()
    {
        $isi['content'] = 'backend/paket/v_paket_rakha.php';
        $isi['judul'] = 'Daftar Data Paket';
        $isi['data'] = $this->m_paket_rakha->getDataPaket();
        $this->load->view('backend/dashboardrakha', $isi);
    }
    public function tambah()
    {
        $isi['content'] = 'backend/paket/t_paket_rakha.php';
        $isi['judul'] = 'Form Tambah Paket';
        $isi['kode_paket'] = $this->m_paket_rakha->generate_kode_paket();
        $this->load->view('backend/dashboardrakha', $isi);
        
    }
    public function simpan()
    {
        $data = array(
            'kode_paket'     => $this->input->post('kode_paket'),
            'nama_paket'     => $this->input->post('nama_paket'),
            'harga_paket'   => $this->input->post('harga_paket'),
            
        );
        $query = $this->db->insert('paket',$data);
        if ($query = true ){
            $this->session->set_flashdata('info', 'Data Paket Berhasil Disimpan!');
            redirect('paketrakha');
        }
    }
    public function edit($kode_paket)
    {
        $isi['content'] = 'backend/paket/e_paket_rakha';
        $isi['judul'] = 'Form edit Paket';
        $isi['data'] = $this->m_paket_rakha->edit($kode_paket);
        $this->load->view('backend/dashboardrakha',$isi); 
    }
    public function update()
    {
        $kode_paket = $this->input->post('kode_paket');
        $data = array(
            'kode_paket'     => $this->input->post('kode_paket'),
            'nama_paket'     => $this->input->post('nama_paket'),
            'harga_paket'   => $this->input->post('harga_paket'),
            
        );
        $query = $this->m_paket_rakha->update($kode_paket, $data);
        if ($query = true ){
            $this->session->set_flashdata('info', 'Data Paket Berhasil DIupdate!');
            redirect('paketrakha');
        }
    }
    public function delete($kode_paket)
    {
        $query = $this->m_paket_rakha->delete($kode_paket);
        if ($query = true ){
            $this->session->set_flashdata('info', 'Data Paket Berhasil Dihapus!');
            redirect('paketrakha');
        }
    }
}


?>