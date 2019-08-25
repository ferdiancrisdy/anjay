<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['peminjaman'] = $this->m_data->tampil_data()->result();
		check_not_login();

		$this->load->view('layout/main_body');

		$this->load->view('v_home',$data);

		$this->load->view('layout/main_last');
	}
}
