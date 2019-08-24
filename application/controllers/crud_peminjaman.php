<?php 
class Crud_Peminjaman Extends CI_Controller {
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
        
        $this->load->view('v_create_peminjaman',$data);
        
		$this->load->view('layout/main_last');
    }
    
    function tambah(){
        $id_peminjaman = $this->input->post('id_peminjaman');
        $id_pegawai = $this->input->post('id_pegawai');
		$tanggal_peminjaman = $this->input->post('tanggal_peminjaman');
		$tanggal_kembali = $this->input->post('tanggal_kembali');
		$status_peminjaman = $this->input->post('status_peminjaman');

		$data = array(
			'id_peminjaman' => $id_peminjaman,
			'tanggal_peminjaman' => $tanggal_peminjaman,
			'tanggal_kembali' => $tanggal_kembali,
			'status_peminjaman' => $status_peminjaman,
			'id_pegawai' => $id_pegawai
		);
        $this->m_data->input_data($data,'peminjaman');
        redirect('home/index');

	}

	function hapus($id){
		$where = array('id_peminjaman' => $id);
		$this->m_data->hapus_data($where,'peminjaman');
		redirect('home/index');
	}
}
?>