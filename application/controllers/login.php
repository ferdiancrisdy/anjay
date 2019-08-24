<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		check_already_login();
		$this->load->view('v_login');
	}

	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['login'])){
			$this->load->model('m_login');
			$query = $this->m_login->login($post);
			$data = $this->m_login->login($post)->result();
			if($query->num_rows()>0){
				$row = $query->row();
				foreach($data as $val) {
					$params = array(
						'username' => $row->username,
						'level' => $row->level,
						'nama' => $val->nama
					);
				}
				$this->session->set_userdata($params);
				echo "<script>
					window.location='".site_url('home')."';
				</script>";
			}else{
				echo"<script>
					alert('Maaf, Username atau Password Salah!!!');
					window.location='".site_url('login')."';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('username', 'level');
		$this->session->unset_userdata($params);
		redirect('login');
	} 
}
