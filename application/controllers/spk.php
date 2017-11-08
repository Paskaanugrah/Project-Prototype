<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class spk extends CI_Controller {

	function __construct (){
		parent::__construct();

		//load model yg digunakan
		$this->load->model('m_spk');
		$this->load->model('m_user');
		$this->load->helper('url_helper');
		$this->load->library('ciqrcode');
	}

	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('spk/home');
		$this->load->view('components/footer');
	}
	public function daftar()
	{
		$this->load->view('components/header');
		$this->load->view('spk/daftar');
		$this->load->view('components/footer');
	}
	public function save()
	{
		$table1 = 'user';
		$data = array(
					'id' => uniqid('',false),
					'nama'=> $this ->input->post('nama'),
					'identitas'	=> $this ->input->post('identitas'),
					'username'	=> $this ->input->post('username'),
					'password'	=> sha1($this ->input->post('password')),
										
					);

		

		   
		$text1 = uniqid('',false);
		$text2 = $this ->input->post('nama');
		$text3 = $this ->input->post('identitas');
		
		 
		
		
		$this->m_spk->simpan($data);
		$this->load->view('components/header');
		$this->load->view('spk/kode', $data);
		$this->load->view('components/footer');
		
	}

	public function jadwal(){
		$data['jadwal'] = $this->m_spk->getJadwal();
		$this->load->view('components/header');
		$this->load->view('spk/jadwal',$data);
		$this->load->view('components/footer');

	}
	public function pesan(){
		$data = array(
					'id_psn' =>	$this->input->post('id_jdw'),
					'asal'=> $this ->input->post('asal'),
					'tujuan'=> $this ->input->post('tujuan'),
					'kereta'=> $this ->input->post('kereta'),
					'tanggal'=> $this ->input->post('tanggal'),
					'waktu'=> $this ->input->post('waktu'),
					// 'jumlah'=> $this ->input->post('jumlah'),
						
					);
		$asal=$this ->input->post('asal');
		$tujuan=$this ->input->post('tujuan');
		$kereta=$this ->input->post('kereta');

		$this->m_spk->simpanPesan($data);
		$this->load->view('components/header');
		// echo "<br>";
		// echo "<h4>Anda berhasil memesan tiket kereta api ". $kereta." dengan jurusan ". $asal."-". $tujuan ."</h4>";
		// echo "<br>";
		header("Content-Type: image/png");
		$qr['data']=$asal."|-|".$tujuan."|-|".$kereta;
		$this->ciqrcode->generate($qr);
		//$this->load->view('components/footer');
		//redirect('index.php/spk/jadwal');

	}
	

	public function login(){
		$this->load->view('components/header');
		$this->load->view('spk/login');
		$this->load->view('components/footer');
	}




// 	public function alternatif()
// 	{
// 		$data['alternatif'] = $this->m_spk->alternatif();

// 		$this->load->view('components/header');
// 		$this->load->view('spk/alternatif', $data);
// 		$this->load->view('components/footer');
// 	}
// 	public function form_alternatif()
// 	{
// 		$this->load->view('components/header');
// 		$this->load->view('spk/form_alternatif');
// 		$this->load->view('components/footer');
// 	}


// 	public function kriteria()
// 	{
// 		$data['kriteria'] = $this->m_spk->kriteria();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/kriteria',$data);
// 		$this->load->view('components/footer');
// 	}
// 	public function form_kriteria()
// 	{

// 		$this->load->view('components/header');
// 		$this->load->view('spk/form_kriteria');
// 		$this->load->view('components/footer');
// 	}

// 	public function sub_kriteria()
// 	{
// 		$data['subkriteria'] = $this->m_spk->subkriteria();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/sub_kriteria',$data);
// 		$this->load->view('components/footer');
// 	}
// 	public function form_sub_kriteria()
// 	{
// 		$data['kriteria'] = $this->m_spk->kriteria();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/form_sub_kriteria',$data);
// 		$this->load->view('components/footer');
// 	}

// 	public function ubahPassword()
// 	{
// 		$data['user'] = $this->m_user->getUser();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/passwd',$data);
// 		$this->load->view('components/footer');
// 	}

// 	public function saveAlter()
// 	{
// 		$data = array(
// 					'alternatif'=> $this ->input->post('alternatif'),
// 					'deskripsi'	=> $this ->input->post('deskripsi'),
// 					'gambar'	=> $this->input->post('gambar'),
// 					);
// 		$this->m_spk->simpanAlter($data);
// 		redirect(base_url('index.php/spk/alternatif'));

// 	}

// 	
// 	}
// 	public function saveSub()
// 	{
// 		$data = array(
// 					'kriteria'		=> $this ->input->post('kriteria'),
// 					'subkriteria'	=> $this ->input->post('subkriteria'),
// 					'nilai'			=> $this ->input->post('nilai'),
// 					);
// 		$this->m_spk->simpanSub($data);
// 		redirect(base_url('index.php/spk/sub_kriteria'));

// 	}

// 	public function editAlter($id){
// 		$where = array(  'id'=>$id  );

// 		$data['alternatif'] = $this->m_spk->suntingAlter($where)->row();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/editAlternatif',$data);
// 		$this->load->view('components/footer');
// 	}
// 	public function editKrit($id){
// 		$where = array(  'id'=>$id  );

// 		$data['kriteria'] = $this->m_spk->suntingKrit($where)->row();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/editKriteria',$data);
// 		$this->load->view('components/footer');
// 	}
// 	public function editSub($id){
// 		$where = array(  'id'=>$id  );
// 		$data['kriteria'] = $this->m_spk->kriteria();
// 		$data['sub'] = $this->m_spk->suntingSub($where)->row();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/editSub',$data); 
// 		$this->load->view('components/footer');
// 	}

// 	public function editImg($id){
// 		$where = array(  'id'=>$id  );

// 		//$data['img'] = $this->m_spk->suntingImg($where)->row();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/editImage'); //,$data);
// 		$this->load->view('components/footer');
// 	}


// 	public function updateAlter($id){
// 		$where = array(
// 						'id'=>$id );
// 		$data = array(
// 				'alternatif' => $this->input->post('alternatif'),
// 				'deskripsi' => $this->input->post('deskripsi'),
// 			);

// 		$this->m_spk->ubahAlter($where,$data);
// 		redirect(base_url('index.php/spk/alternatif'));
// 	}

// 	public function updateKrit($id){
// 		$where = array(
// 						'id'=>$id );
// 		$data = array(
// 				'kriteria' => $this->input->post('kriteria'),
// 				'tipe' => $this->input->post('tipe'),
// 			);

// 		$this->m_spk->ubahKrit($where,$data);
// 		redirect(base_url('index.php/spk/kriteria'));
// 	}
// 	public function updateSub($id){
// 		$where = array(
// 						'id'=>$id );
// 		$data = array(
// 				'kriteria' => $this->input->post('kriteria'),
// 				'subkriteria' => $this->input->post('subkriteria'),
// 				'nilai' => $this->input->post('nilai'),
// 			);

// 		$this->m_spk->ubahSub($where,$data);
// 		redirect(base_url('index.php/spk/sub_kriteria'));
// 	}




// 	public function deleteAlter($id){
// 		$where = array(
// 						'id'=>$id );
// 		$this->m_spk->hapusAlter($where);
// 		redirect(base_url('index.php/spk/alternatif'));
// 	}
// 	public function deleteKrit($id){
// 		$where = array(
// 						'id'=>$id );
// 		$this->m_spk->hapusKrit($where);
// 		redirect(base_url('index.php/spk/kriteria'));
// 	}
// 	public function deleteSub($id){
// 		$where = array(
// 						'id'=>$id );
// 		$this->m_spk->hapusSub($where);
// 		redirect(base_url('index.php/spk/sub_kriteria'));
// 	}

// 	public function konsul()
// 	{
// 		$data['konsul'] = $this->m_spk->konsul();
// 		$this->load->view('components/header');
// 		$this->load->view('spk/konsul', $data);
// 		$this->load->view('components/footer');
// 	}
}
?>
