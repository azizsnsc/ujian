<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satpam extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        //$this->load->library('upload');
        //$this->akses->check_login();
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function proses()
	{
       //$this->login_model->login();
       $this->load->view('login',['data'=>$this->login_model->login()]);
	}

    public function logout() {
		$data = array(
                    'IDUser' 		=> "",
                    'EmailAdmin'  	=> "",
                    'PasswordAdmin' => "",
                    'NamaAdmin' 	=> "",
                    'Akses' 	=> "",
					'akses_admin' 	=> false
                    );
        $this->session->set_userdata($data);
		redirect('satpam');
	}



}
