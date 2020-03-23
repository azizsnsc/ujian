<?php defined('BASEPATH') OR exit('No direct script access allowed');

class kartu_model extends CI_Model{
	public function get_siswa($kelas = '',$siswa=''){
		$where = [];
		$data = [];
		if(!empty($kelas)){
			$where = [$kelas];
			$data = $this->db->query('SELECT * FROM siswa WHERE kelas = ?', $where)->result_array();
			if(!empty($siswa)){
				$where = [$kelas,$siswa];
				$data = $this->db->query('SELECT * FROM siswa WHERE kelas = ? AND IDSiswa = ?', $where)->result_array();
			}
		}
		return $data;
	}
	public function get_kelas($kelas = ''){
		if(empty($kelas)){
			$data = $this->db->query('SELECT kelas FROM siswa GROUP BY kelas')->result_array();
		}else{
			$data = $this->db->query('SELECT kelas FROM siswa WHERE kelas = ? GROUP BY kelas',$kelas)->result_array();
		}
		return $data;
	}

	public function mapel()
	{
		$mapel = array(
			array(
				'no' => '1',
				'hari' => 'Jumat, 20 Maret 2020',
				'pukul' => '07.30 - 09.30',
				'otkp' => 'Pend. Agama dan Budi Pekerti',
				'bdp' => 'Pend. Agama dan Budi Pekerti',
				'rpl' => 'Pend. Agama dan Budi Pekerti',
				'tbsm' => 'Pend. Agama dan Budi Pekerti',
				'akl' => 'Pend. Agama dan Budi Pekerti',
			),
			array(
				'no' => '1',
				'hari' => 'Jumat, 20 Maret 2020',
				'pukul' => '09.30 - 10.00',
				'otkp' => 'Istirahat',
				'bdp' => 'Istirahat',
				'rpl' => 'Istirahat',
				'tbsm' => 'Istirahat',
				'akl' => 'Istirahat',
			),
			array(
				'no' => '1',
				'hari' => 'Jumat, 20 Maret 2019',
				'pukul' => '10.00 - 11.30',
				'otkp' => 'Bahasa Jawa',
				'bdp' => 'Bahasa Jawa',
				'rpl' => 'Bahasa Jawa',
				'tbsm' => 'Bahasa Jawa',
				'akl' => 'Bahasa Jawa',
			),
			array(
				'no' => '2',
				'hari' => 'Senin, 23 Maret 2020',
				'pukul' => '07.30 - 09.30',
				'otkp' => 'Pend. Pancasila dan Kewarganegaraan',
				'bdp' => 'Pend. Pancasila dan Kewarganegaraan',
				'rpl' => 'Pend. Pancasila dan Kewarganegaraan',
				'tbsm' => 'Pend. Pancasila dan Kewarganegaraan',
				'akl' => 'Pend. Pancasila dan Kewarganegaraan',
			),
			array(
				'no' => '2',
				'hari' => 'Senin, 23 Maret 2020',
				'pukul' => '09.30 - 10.00',
				'otkp' => 'Istirahat',
				'bdp' => 'Istirahat',
				'rpl' => 'Istirahat',
				'tbsm' => 'Istirahat',
				'akl' => 'Istirahat',
			),
			array(
				'no' => '2',
				'hari' => 'Senin, 23 Maret 2020',
				'pukul' => '10.00 - 11.30',
				'otkp' => 'Simkomdig',
				'bdp' => 'Simkomdig',
				'rpl' => 'Simkomdig',
				'tbsm' => 'Simkomdig',
				'akl' => 'Simkomdig',
			),
			array(
				'no' => '3',
				'hari' => 'Selasa, 24 Maret 2020',
				'pukul' => '07.30 - 09.30',
				'otkp' => 'Bahasa Indonesia',
				'bdp' => 'Bahasa Indonesia',
				'rpl' => 'Bahasa Indonesia',
				'tbsm' => 'Bahasa Indonesia',
				'akl' => 'Bahasa Indonesia',
			),
			array(
				'no' => '3',
				'hari' => 'Selasa, 24 Maret 2020',
				'pukul' => '09.30 - 10.00',
				'otkp' => 'Istirahat',
				'bdp' => 'Istirahat',
				'rpl' => 'Istirahat',
				'tbsm' => 'Istirahat',
				'akl' => 'Istirahat',
			),
			array(
				'no' => '3',
				'hari' => 'Selasa, 24 Maret 2020',
				'pukul' => '10.00 - 11.30',
				'otkp' => 'Seni Budaya',
				'bdp' => 'Seni Budaya',
				'rpl' => 'Seni Budaya',
				'tbsm' => 'Seni Budaya',
				'akl' => 'Seni Budaya',
			),
			array(
				'no' => '4',
				'hari' => 'Kamis, 26 Maret 2020',
				'pukul' => '07.30 - 09.30',
				'otkp' => 'Matematika',
				'bdp' => 'Matematika',
				'rpl' => 'Matematika',
				'tbsm' => 'Matematika',
				'akl' => 'Matematika',
			),
			array(
				'no' => '4',
				'hari' => 'Kamis, 26 Maret 2020',
				'pukul' => '09.30 - 10.00',
				'otkp' => 'Istirahat',
				'bdp' => 'Istirahat',
				'rpl' => 'Istirahat',
				'tbsm' => 'Istirahat',
				'akl' => 'Istirahat',
			),
			array(
				'no' => '4',
				'hari' => 'Kamis, 26 Maret 2020',
				'pukul' => '10.00 - 11.30',
				'otkp' => 'IPA',
				'bdp' => 'IPA',
				'rpl' => 'Kimia',
				'tbsm' => 'Kimia',
				'akl' => 'IPA',
			),
			array(
				'no' => '5',
				'hari' => 'Jumat, 27 Maret 2020',
				'pukul' => '07.30 - 09.30',
				'otkp' => 'Bhs. Inggris',
				'bdp' => 'Bhs. Inggris',
				'rpl' => 'Bhs. Inggris',
				'tbsm' => 'Bhs. Inggris',
				'akl' => 'Bhs. Inggris',
			),
			array(
				'no' => '5',
				'hari' => 'Jumat, 27 Maret 2020',
				'pukul' => '09.30 - 10.00',
				'otkp' => 'Istirahat',
				'bdp' => 'Istirahat',
				'rpl' => 'Istirahat',
				'tbsm' => 'Istirahat',
				'akl' => 'Istirahat',
			),
			array(
				'no' => '5',
				'hari' => 'Jumat, 27 Maret 2020',
				'pukul' => '10.00 - 11.30',
				'otkp' => 'Ekonomi Bisnis',
				'bdp' => 'Ekonomi Bisnis',
				'rpl' => 'Fisika',
				'tbsm' => 'Fisika',
				'akl' => 'Ekonomi Bisnis',
			),
			array(
				'no' => '6',
				'hari' => 'Senin, 30 Maret 2020',
				'pukul' => '07.30 - 09.00',
				'otkp' => 'Administrasi Umum',
				'bdp' => 'Administrasi Umum',
				'rpl' => '',
				'tbsm' => '',
				'akl' => 'Administrasi Umum',
			)
		);
		return $mapel;
	}
}
