<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarhadir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        //$this->load->library('upload');
        $this->login_model->check_login();
    }

	public function index()
	{

        
        $data['kel'] = $this->db->query("select*from siswa group by kelas")->result();
        $data['soal'] = $this->db->query("select*from soal")->result();
        $data['halaman'] = "daftar";
		$this->load->view('untukadmin', $data);
	}

    public function jik()
    {
        $pos = $this->input->post();
            $soal = $this->input->post('Soal');
            $data['df'] = $this->db->get_where('soal', ['IDSoal'=>$soal])->result();
            $kelas = $this->input->post('kelas');
           // $data['keli'] = $this->db->get_where('absensi', ['kelas'=>$kelas])->result();
            $data['keli'] = $this->db->query("select*from absensi,siswa where absensi.IDSiswa=siswa.IDSiswa AND absensi.IDSoal='".$soal."' AND absensi.kelas='".$kelas."'")->result();
            $data['jum'] = $this->db->query("select*from absensi,siswa where absensi.IDSiswa=siswa.IDSiswa AND absensi.IDSoal='".$soal."' AND absensi.kelas='".$kelas."'")->num_rows();
        $data['halaman'] = "daftar2";
        $this->load->view('untukadmin', $data);
    }

    public function cetak(){
        $pos = $this->input->post();
            $soal = $this->input->post('Soal');
            $data['df'] = $this->db->get_where('soal', ['IDSoal'=>$soal])->result();
            $kelas = $this->input->post('kelas');
            $data['kelasnya'] = $this->input->post('kelas');
           // $data['keli'] = $this->db->get_where('absensi', ['kelas'=>$kelas])->result();
            $data['keli'] = $this->db->query("select*from absensi,siswa where absensi.IDSiswa=siswa.IDSiswa AND absensi.IDSoal='".$soal."' AND absensi.kelas='".$kelas."'")->result();
            $data['jum'] = $this->db->query("select*from absensi,siswa where absensi.IDSiswa=siswa.IDSiswa AND absensi.IDSoal='".$soal."' AND absensi.kelas='".$kelas."'")->num_rows();
        $this->load->view('cetak', $data);
    }

}
