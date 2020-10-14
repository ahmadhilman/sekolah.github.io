<?php
defined('BASEPATH') or exit('No direct script access allowed');
class home extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        siswa_login();
        
    }
    public function index()
    {
    	$data['judul']  = 'Test';
        $data['user'] = $this->ModelSiswa->cekData(['nisn' => $this->session->userdata('nisn')])->row_array();
        $pengumuman = $this->ModelInfo->getPeng();
         foreach ($pengumuman as $k) {
                        $data['jdl'] = $k->jdl;
        }

    	$this->load->view('templates/siswa/menu', $data);
    	$this->load->view('siswa/index', $data);
        $this->load->view('templates/back/footer');
    }
    public function profile()
    {
        $data['judul']  = 'Profile';
        $data['user'] = $this->ModelSiswa->cekData(['nisn' => $this->session->userdata('nisn')])->row_array();
$this->load->view('templates/siswa/menu', $data);
        $this->load->view('siswa/profile', $data);
        $this->load->view('templates/back/footer');
}
    public function mapel()
    {
        $data['judul'] = 'Mapel';
        $data['user'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id')])->row_array();
        $data['mapel'] = $this->db->get('pelajaran')->result_array();
        $this->form_validation->set_rules('pelajaran', 'nama pelajaran', 'required', [
            'required' => 'Nama Pelajaran harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/back/menu', $data);
        $this->load->view('admin/data_mapel', $data);
        $this->load->view('templates/back/footer');
         } else {
            $data = [
                'pelajaran' => $this->input->post('pelajaran', TRUE)
            ];

            $this->db->insert('pelajaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Mata Pelajaran Berhasil diTambah </div>');
            redirect('admin/home/mapel');
        }

    }
    public function ubahmapel($id)
    {        $data['judul'] = 'Ubah Data Mapel';
        $data['mapel'] = $this->ModelStaf->where($id);
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        


        $this->form_validation->set_rules('pelajaran', 'Nama Pelajaran', 'required|min_length[3]', [
            'required' => 'Nama Pelajaran harus diisi',
            'min_length' => 'Nama Pelajaran terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/back/menu', $data);
        $this->load->view('admin/ubah_mapel', $data);
        $this->load->view('templates/back/footer');
}else{
            $data = [
                'id' => $id,
                'pelajaran' => $this->input->post('pelajaran', true)
            ];
            $this->db->where('id', $data['id']);
            $this->db->update('pelajaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Mata Pelajaran Berhasil diUbah </div>');
            redirect('admin/home/mapel');
        }
    }

    public function hapusMapel($id)
    {
        $where = array('id'=>$id);
        $this->db->delete('pelajaran', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data Mata Pelajaran Berhasil diHapus </div>');
        redirect('admin/home/mapel');
    }
}