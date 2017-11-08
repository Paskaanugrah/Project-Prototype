<?php
class M_user extends CI_Model{
	
	protected $table4 = 'user';
	
	function cek_login($where) {
		return $this->db->get_where($this->table4,$where);
	}
	function ubahPass($where,$data){
		$this->db->where($where);
		$this->db->update($this->table4, $data);
	}
	function getUser(){
		return $this->db->get($this->table4);
	}
	
	
	
}


?>