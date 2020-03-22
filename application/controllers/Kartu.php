<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu extends CI_Controller{

	public function index(){
		$this->load->model('kartu_model');
		$kelas = $this->input->get('kelas');
		$siswa = $this->input->get('siswa');
		$data['siswa'] = $this->kartu_model->get_siswa($kelas,$siswa);
		$data['kelas'] = $this->kartu_model->get_kelas($kelas);
		$data['mapel'] = $this->kartu_model->mapel();;
		$data['selected_kelas'] = $kelas;
		$data['halaman'] = "kartu/index";
		$this->load->view('dashboard',$data);
	}
	public function cetak_kartu($kelas = '',$siswa= '')
	{
		$kelas = urldecode($kelas);
		$siswa = urldecode($siswa);
		$this->load->model('kartu_model');
		$data['siswa'] = $this->kartu_model->get_siswa($kelas,$siswa);
		$data['kelas'] = $this->kartu_model->get_kelas($kelas);
		$data['mapel'] = $this->kartu_model->mapel();
		$data['selected_kelas'] = $kelas;
		$data['is_cetak'] = TRUE;
		$data['halaman'] = "kartu/cetak_kartu";
		$this->load->view('dashboard',$data);
	}
}