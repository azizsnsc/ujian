<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['halaman'] = "home";
		$this->load->view('dashboard', $data);
	}

    public function cari(){
        $mapel = $this->input->post('mapel');
        $noper = $this->input->post('noper');
        $data['halaman'] = "cari";
        $data['mape'] = $this->db->get_where('soal',['IDSoal'=>$mapel])->result();
        $data['sis'] = $this->db->get_where('siswa',['no_peserta'=>$noper])->result();
        $this->load->view('dashboard', $data);
    }

    public function simpan(){
        $ling = $this->input->post('penting');
        $so = $this->input->post('IDSoal');
        $ids = $this->input->post('IDSiswa');
        $dt = $this->db->query('select*from absensi where IDSoal="'.$so.'" AND IDSiswa="'.$ids.'"')->num_rows();
        if ($dt >= 1) {
            echo ("<script LANGUAGE='JavaScript'>
    window.location.href='$ling';
    </script>");
        } else {
        $pos = $this->input->post();
        $this->db->insert('absensi',['IDSoal'=>$pos['IDSoal'], 'IDSiswa'=>$pos['IDSiswa'], 'kelas'=>$pos['kelas']]);
       // echo '<meta http-equiv="refresh" content="3;url=$ling">';
        //header('location: https://stackoverflow.com/questions/$ling');
        echo ("<script LANGUAGE='JavaScript'>
    window.location.href='$ling';
    </script>");
    }
    }

}
