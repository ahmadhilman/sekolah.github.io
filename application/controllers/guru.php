<?php
defined('BASEPATH') or exit('No direct script access allowed');
class guru extends CI_Controller
{

     public function index()
    {   
        $data['judul'] = 'Data guru';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['guru'] = $this->db->get('guru')->result_array();
        $data['jabatan'] = $this->db->get('jabatan')->result_array();
        $this->load->view('templates/back/menu', $data);
        $this->load->view('admin/data_guru', $data);
        $this->load->view('templates/back/footer');
    }    
    public function daftar_guru()
    {
    	$data['judul']  = 'Daftar Guru';
    	$data['guru'] = $this->ModelGuru->getGuruWhere();
    	$this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
    	$this->load->view('home/guru', $data);
        $this->load->view('templates/footer');
    }
     public function daftar_staf()
    {
        $data['judul']  = 'Daftar Staff';
        $data['staf'] = $this->ModelStaf->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/staf', $data);
        $this->load->view('templates/footer');
}
}