<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belumhadir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        //$this->load->library('upload');
        $this->login_model->check_login();
    }

	public function index()
	{
        $uri = $this->uri->segment('2');
        $data['absen'] = $this->db->query("select*from absensi where IDSoal='$uri'")->result();
        $data['halaman'] = "b_belumhadir";
		$this->load->view('untukadmin', $data);
	}

    public function mapel()
    {
        $uri = $this->uri->segment('3');
        $data['soal'] = $this->db->query("select*from soal where IDSoal='$uri'")->result();
        $bab = $this->db->query("select*from absensi,siswa where absensi.IDSiswa=siswa.IDSiswa AND absensi.IDSoal='$uri'");
        $data['absen'] = $bab->result();
        $data['dabsen'] = $bab->num_rows();
        $data['halaman'] = "b_belumhadir";
        $this->load->view('untukadmin', $data);
    }

}
