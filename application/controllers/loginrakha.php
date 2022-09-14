<?php
class Loginrakha extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login_rakha');
    }

    public function index()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->m_login_rakha->proses_login($username, $password);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('panelrakha');
    }
}

?>