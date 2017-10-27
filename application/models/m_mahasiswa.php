<?php

class M_mahasiswa extends CI_Model {
	
	/* Nama tabel dalam database */
	protected $table = 'mahasiswa';
	
	/* Fungsi simpan/insert ke database */
	function simpan($data) {
		$this->db->insert($this->table,$data);
	}
	
	/* Fungsi menampilkan data dari database */
	function daftar(){
		/* Sama dengan query SELECT */
		return $this->db->get($this->table);
	}
	
	/* Fungsi menghapus data dari database */
	function hapus($where){
		$this->db->where($where);
		$this->db->delete($this->table);
	}
	
	/* Menampilkan detail dari database */
	function detail($where){
		return $this->db->get_where($this->table,$where);
	}

	function ubah($where,$data)
	{
		$this->db->where($where);
		$this->db->update($this->table,$data);
	}
}

?>