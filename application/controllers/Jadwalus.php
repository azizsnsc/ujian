<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalus extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        //$this->load->library('upload');
        $this->login_model->check_login();
    }

	public function index()
	{
        $uri = $this->uri->segment(3);
        if (!empty($uri)) {
            $data['editsoal'] = $this->db->get_where('soal', ['IDSoal'=>$uri])->result();
        } else {
            $data['editsoal'] = "";
        }
        $data['soal'] = $this->db->query("select*from soal order by IDSoal Desc")->result();
        $data['halaman'] = "b_jadwalus";
		$this->load->view('untukadmin', $data);
	}

    public function edit()
    {
        $uri = $this->uri->segment(3);
        if (!empty($uri)) {
            $data['editsoal'] = $this->db->get_where('soal', ['IDSoal'=>$uri])->result();
        } else {
            $data['editsoal'] = "";
        }
        $data['soal'] = $this->db->get('soal')->result();
        $data['halaman'] = "b_jadwalus";
        $this->load->view('untukadmin', $data);
    }

    public function simpan(){
        $pos = $this->input->post();
        if (empty($pos['id'])) {
        $a = $this->db->insert('soal', ['NamaSoal'=>$pos['NamaSoal'], 'tanggal_uji'=>$pos['tanggal_uji'], 'waktu_awal'=>$pos['waktu_awal'], 'waktu_akhir'=>$pos['waktu_akhir'], 'link_soal'=>$pos['link_soal']]);
        } else {
        $a = $this->db->update('soal', ['NamaSoal'=>$pos['NamaSoal'], 'tanggal_uji'=>$pos['tanggal_uji'], 'waktu_awal'=>$pos['waktu_awal'], 'waktu_akhir'=>$pos['waktu_akhir'], 'link_soal'=>$pos['link_soal']], ['IDSoal'=>$pos['id']]);
        }
        if ($a) {
            echo $this->session->set_flashdata('msg','info');
            redirect('jadwalus');
        } else {
            echo $this->session->set_flashdata('msg','error');
            redirect('jadwalus');
        }
    }

    public function hapus(){
        $a = $this->db->delete('soal', ['IDSoal'=>$this->input->post('id')]);
        if ($a) {
            echo $this->session->set_flashdata('msg','success-hapus');
            redirect('jadwalus');
        } else {
            echo $this->session->set_flashdata('msg','error');
            redirect('jadwalus');
        }
    }

}
