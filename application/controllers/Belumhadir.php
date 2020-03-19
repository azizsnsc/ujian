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
        $a = $this->db->query("select*from")->result();
        $data['halaman'] = "belumhadir";
		$this->load->view('untukadmin', $data);
	}

}
