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
        $pos = $this->input->post();
      if(!empty($pos['datanya'])) {
         $data['kela'] = $pos['kelas'];
         $data['idsoal'] = $pos['IDSoal'];
         $data['kel'] = $this->db->query("select kelas from siswa group by kelas")->result();
         $data['soal'] = $this->db->query("select*from soal where IDSoal !='".$pos['IDSoal']."'")->result();
         $data['ssoal'] = $this->db->query("select*from soal where IDSoal ='".$pos['IDSoal']."'")->result();
         $data['skelas'] = "<option value='".$pos['kelas']."'>".$pos['kelas']."</option>";
         //$data['skelas'] = $this->db->query("select kelas from siswa where kelas !='".$pos['kelas']."' group by kelas")->result();
         //$data['dsoal'] = $this->db->query("select*from soal where IDSoal='".."'")->result();
         $bh = $this->db->query("select*from absensi,siswa where absensi.IDSiswa=siswa.IDSiswa AND absensi.IDSoal='".$pos['IDSoal']."' AND absensi.kelas='".$pos['kelas']."'");
         $data['absen'] = $bh->result();
         $data['belum'] = $this->db->query('select*from siswa where siswa.kelas="'.$pos['kelas'].'" AND NOT EXISTS(SELECT * FROM absensi WHERE absensi.IDSoal="'.$pos['IDSoal'].'" AND absensi.kelas="'.$pos['kelas'].'" AND siswa.IDSiswa = absensi.IDSiswa)')->result();
         $data['jb']= $bh->num_rows();
        } else {
        $data['kela'] = "";
        $data['idsoal'] = "";
        $data['kel'] = $this->db->query("select kelas from siswa group by kelas")->result();
        $data['soal'] = $this->db->query("select*from soal")->result();
        $data['ssoal'] = "";
        $data['skelas'] = "";
        //$data['dsoal'] = "";
        $data['absen'] = "";
        $data['belum'] = "";
        $data['jb'] = "";
        $bh="";
        }
        $data['halaman'] = "daftar";
		$this->load->view('untukadmin', $data);
	}

    public function cetak(){
        $pos = $this->input->post();
         $data['kela'] = $pos['kelas'];
         $data['idsoal'] = $pos['IDSoal'];
         $data['kel'] = $this->db->query("select kelas from siswa group by kelas")->result();
         $data['soal'] = $this->db->query("select*from soal where IDSoal !='".$pos['IDSoal']."'")->result();
         $data['ssoal'] = $this->db->query("select*from soal where IDSoal ='".$pos['IDSoal']."'")->result();
         $data['skelas'] = "<option value='".$pos['kelas']."'>".$pos['kelas']."</option>";
         //$data['skelas'] = $this->db->query("select kelas from siswa where kelas !='".$pos['kelas']."' group by kelas")->result();
         //$data['dsoal'] = $this->db->query("select*from soal where IDSoal='".."'")->result();
         $bh = $this->db->query("select*from absensi,siswa where absensi.IDSiswa=siswa.IDSiswa AND absensi.IDSoal='".$pos['IDSoal']."' AND absensi.kelas='".$pos['kelas']."'");
         $data['absen'] = $bh->result();
         $data['belum'] = $this->db->query('select*from siswa where siswa.kelas="'.$pos['kelas'].'" AND NOT EXISTS(SELECT * FROM absensi WHERE absensi.IDSoal="'.$pos['IDSoal'].'" AND absensi.kelas="'.$pos['kelas'].'" AND siswa.IDSiswa = absensi.IDSiswa)')->result();
         $data['jb']= $bh->num_rows();
        $this->load->view('cetak', $data);
    }

}
