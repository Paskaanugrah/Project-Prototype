<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		/* Load model yang akan digunakan */
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('mahasiswa/add');
		$this->load->view('components/footer');
 	
		
		
	}

	public function add()
	{
		$this->load->view('components/header');
		$this->load->view('mahasiswa/add');
		$this->load->view('components/footer');
	}
	
	// public function save()
	// {
	// 	$data = array(
	// 		/* Format : 'nama kolom di db' => $this->input->post('nama_field'), */
	// 		'first_name' => $this->input->post('first_name'),
	// 		'last_name' => $this->input->post('last_name'),
	// 	);
		
	// 	/* Proses simpan */
	// 	$this->m_mahasiswa->simpan($data);
		
	// 	/* Kembali ke halaman depan */
	// 	redirect(base_url('index.php'));
	// }
	
	public function delete($id){
		$where = array(
			'id' => $id
		);
		
		/* Proses hapus */
		$this->m_mahasiswa->hapus($where);
		
		/* Kembali ke halaman depan */
		redirect(base_url('index.php'));
	}

	public function detail($id){
		/* Mana yang mau ditampilan */
		$where =  array(
			'id' => $id
		);

		$data['mahasiswa'] = $this->m_mahasiswa->detail($where)->row();

		$this->load->view('components/header');

		/* Masukkan data ke view */
		$this->load->view('mahasiswa/detail',$data);
		$this->load->view('components/footer',$data);
	}
	

	public function edit($id){
		/* Mana yang mau ditampilan */
		$where =  array(
			'id' => $id
		);

		$data['mahasiswa'] = $this->m_mahasiswa->detail($where)->row();

		$this->load->view('components/header');

		/* Masukkan data ke view */
		$this->load->view('mahasiswa/edit',$data);
		$this->load->view('components/footer',$data);
	}


	public function update($id){
		/* Mana yang mau ditampilan */
		$where =  array(
			'id' => $id
		);

		$data = array(
			/* Format : 'nama kolom di db' => $this->input->post('nama_field'), */
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
		);

		/* Proses simpan */
		$this->m_mahasiswa->ubah($where,$data);
		redirect(base_url('index.php'));
	}


	public function save(){
		$this->load->library('ciqrcode');
		header("Content-Type: image/png");
		  

		$qr['data'] = $this->input->post('first_name');

		 $this->ciqrcode->generate($qr);

		
	}
}
	
