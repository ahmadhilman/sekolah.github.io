<?php
defined('BASEPATH') or exit('No direct script access allowed');
class index extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
}
    public function index()
    {
        $data['judul']  = 'Test';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/menu', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
     public function dataPribadi()
    {   
               $data['judul'] = 'Profil Saya';
                 $data['siswa'] = $this->ModelUser->getsiswa()->result_array();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/menu', $data);
        $this->load->view('siswa/data_pribadi', $data);
        $this->load->view('templates/footer');
    }
}