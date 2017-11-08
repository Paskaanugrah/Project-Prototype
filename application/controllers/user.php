<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->helper('url_helper');
		
	}
	
	public function login()
	{
		$this->load->view('spk/login');
	}
	
	public function verify()
	{
		//ambil data dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//konstruksi query where
		$where = array(
			'username' => $username,
			'password' => sha1($password),
			);
		
		//cek ke database
		$cek = $this->m_user->cek_login($where)->num_rows();
		
		
		//jika pasangan username dan password ditemukan 
		if($cek ==1){
			//buat sesi baru
			$data_session = array(
				'username'=>$username,
				'status'=>'login'
				);
				
			$this->session->set_userdata($data_session);
			
			redirect(base_url('index.php/spk/jadwal'));
		}
		else {
				$this->session->set_flashdata('error','Username atau password salah');
				redirect(base_url('index.php/spk/login'));
			}
			
	}
	public function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('index.php/spk/'));
		}

	public function updatePass($username){
		$where = array(
						'username'=> $this->input->post('username'));
		$data  = array(
						'password'	=> $this->input->post('password'));

		$this->m_user->ubahPass($where,$data);
		redirect(base_url('index.php/spk'));
	}
	
}
