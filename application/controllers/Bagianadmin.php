<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagianadmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        //$this->load->library('upload');
        $this->login_model->check_login();
    }

	public function index()
	{
        $data['halaman'] = "omah";
		$this->load->view('untukadmin', $data);
	}

}
