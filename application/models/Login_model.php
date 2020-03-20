<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model
{
	public function check_login()
	{
		if(empty($this->session->userdata(str_replace('/','_',base_url().'_logged_in'))))
		{
			$curent_url = base_url($_SERVER['PATH_INFO']);
			$curent_url = urlencode($curent_url);
			redirect(base_url('login?redirect_to='.$curent_url));
		}else{
			if(!empty($_COOKIE[base_url().'_username']))
			{
				$data['username'] = @$_COOKIE[base_url().'_username'];
				$data['password'] = @$_COOKIE[base_url().'_password'];
				$data['remember_me'] = @$_COOKIE[base_url().'_remember_me'];
				$this->set_cookie($data);
				$user = $this->CI->db->query('SELECT * FROM user WHERE username = ? LIMIT 1',@$data['username'])->row_array();
				if(!empty($user))
				{
					if(decrypt($data['password'], $user['password']))
					{
						$url = @$_GET['redirect_to'];
						if(!empty($url))
						{
							$url = urldecode($url);
						}else{
							$url = 'admin/index';
						}
						$role = $this->CI->db->query('SELECT level,title FROM user_role WHERE id = ? LIMIT 1', @$user['user_role_id'])->row_array();
						if(!empty($role))
						{
							$user['role'] = @$role['title'];
							$user['level'] = @$role['level'];
						}else{
							$user['role'] = 'user';
						}
						$this->CI->session->set_userdata(base_url().'_logged_in', $user);
						$this->save_ip($user['id']);
					}
				}
			}
		}
	}

	public function cek_petugas(){
		
	}

	public function login()
	{
		$data = $this->input->post();
		$msg = [];
		if(!empty($data))
		{
			$user = $this->db->query('SELECT * FROM user WHERE username = ?',$data['username'])->row_array();
			if(!empty($user))
			{
				if(!decrypt($data['password'], $user['password']))
				{
					$this->session->set_flashdata("gagal", "Maaf, Password Yang Anda Masukan Salah");
					//$msg = ['status'=>'gagal','msg'=>'password tidak sesuai'];
				}else{
					$url = @$_GET['redirect_to'];
					if(!empty($url))
					{
						$url = base_url();
					}else{
						$url = base_url('bagianadmin');
					}
					$tmp_role = $this->role_all();
					$role = [];
					if(!empty($tmp_role))
					{
						foreach ($tmp_role as $key => $value) 
						{
							$role[$value['id']] = $value['title'];
						}
					}

					$user_role = $this->db->get_where('user_has_role',['user_id'=>$user['id']])->result_array();
					foreach($user_role as $key => $value)
					{
						$user['role'][] = ['id'=>$value['user_role_id'],'title'=>$role[$value['user_role_id']]];
					}
					//$this->db->select('nama,gender,photo');
					$user_profile = $this->db->get_where('user_profile',['user_id'=>$user['id']])->row_array();
					foreach ($user_profile as $key => $value) 
					{
						$user[$key] = $value;
					}
					$this->session->set_userdata(str_replace('/','_',base_url().'_logged_in'), $user);
					redirect($url);
				}
			}else{
				//$msg = ['status'=>'gagal','msg'=>'username tidak diketahui'];
				$this->session->set_flashdata("gagal", "Maaf, Username tidak diketahui");
			}
		}
		return $msg;
	}

	public function all()
	{
		$this->db->select('user.*,user_profile.nama');
		$this->db->from('user');
		$this->db->join('user_profile', 'user.id = user_profile.user_id');
		// $this->db->where(['user.id'=>$id]);

		return $this->db->get()->result_array();
	}

	public function role_all()
	{
		return $this->db->get('user_role')->result_array();
	}

}