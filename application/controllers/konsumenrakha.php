<?php
class Konsumenrakha extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_konsumen_rakha');
    }
    public function index()
    {
        $isi['content'] = 'backend/konsumen/v_konsumen_rakha';
        $isi['judul'] = 'Data Konsumen';
        $isi['data'] = $this->m_konsumen_rakha->getAllDataKonsumen();
       
        $this->load->view('backend/dashboardrakha',$isi); 
    }
    public function tambah()
    {
        $isi['content'] = 'backend/konsumen/t_konsumen_rakha';
        $isi['judul'] = 'Form Tambah Konsumen';
        $isi['kode_konsumen'] = $this->m_konsumen_rakha->generate_kode_konsumen();
        $this->load->view('backend/dashboardrakha',$isi); 
    }
    public function simpan()
    {
        $data = array(
            'kode_konsumen'     => $this->input->post('kode_konsumen'),
            'nama_konsumen'     => $this->input->post('nama_konsumen'),
            'alamat_konsumen'   => $this->input->post('alamat_konsumen'),
            'no_telp'           => $this->input->post('no_telp'),
        );
        $query = $this->db->insert('konsumen',$data);
        if ($query = true ){
            $this->session->set_flashdata('info', 'Data Konsumen Berhasil Disimpan!');
            redirect('konsumenrakha');
        }
    }
    public function edit($id)
    {
        $isi['content'] = 'backend/konsumen/e_konsumen_rakha';
        $isi['judul'] = 'Form edit Konsumen';
        $isi['konsumen'] = $this->m_konsumen_rakha->edit($id);
        $this->load->view('backend/dashboardrakha',$isi); 
    }
    public function update()
    {
        $kode_konsumen = $this->input->post('kode_konsumen');
        $data = array(
            'kode_konsumen'     => $this->input->post('kode_konsumen'),
            'nama_konsumen'     => $this->input->post('nama_konsumen'),
            'alamat_konsumen'   => $this->input->post('alamat_konsumen'),
            'no_telp'           => $this->input->post('no_telp'),
        );
        $query = $this->m_konsumen_rakha->update($kode_konsumen,$data);
        if ($query = true ){
            $this->session->set_flashdata('info', 'Data Konsumen Berhasil Diupdate!');
            redirect('konsumenrakha');
        }
    }    
    public function delete($id)
    {
        $query = $this->m_konsumen_rakha->delete($id);
        if ($query = true ){
            $this->session->set_flashdata('info', 'Data Konsumen Berhasil Dihapus!');
            redirect('konsumenrakha');
        }
    }

}

?>