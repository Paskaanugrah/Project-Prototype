<?php

class m_spk extends CI_Model {
	//nama tabel dalam database
	protected $table1 = 'user';
	protected $table2 = 'jadwal';
	protected $table3 = 'pemesanan';




	function simpan($data) {
		$this->db->insert($this->table1,$data);
	}


   function getJadwal(){
   		return $this->db->get($this->table2);
   }

   function simpanPesan($data) {
		$this->db->insert($this->table3,$data);
	}


	// }
	// function alternatif(){
	// 	return $this->db->get($this->table1);
	// }
	// function suntingAlter($where){
	// 	return $this->db->get_where( $this->table1, $where);
	// }
	// function ubahAlter($where,$data){
	// 	$this->db->where($where);
	// 	$this->db->update($this->table1, $data);
	// }
	// function hapusAlter($where){
	// 	$this->db->where($where);
	// 	$this->db->delete($this->table1);
	// }

	

	// function simpanKrit($data) {
	// 	$this->db->insert($this->table2,$data);

	// }
	// function kriteria(){
	// 	return $this->db->get($this->table2);
	// }
	// function suntingKrit($where){
	// 	return $this->db->get_where( $this->table2, $where);
	// }
	// function ubahKrit($where,$data){
	// 	$this->db->where($where);
	// 	$this->db->update($this->table2, $data);
	// }
	// function hapusKrit($where){
	// 	$this->db->where($where);
	// 	$this->db->delete($this->table2);
	// }

	// function simpanSub($data){
	// 	$this->db->insert($this->table3,$data);
	// }
	// function subkriteria(){
	// 	return $this->db->get($this->table3);
	// }
	// function suntingSub($where){
	// 	return $this->db->get_where( $this->table3, $where);
	// }
	// function ubahSub($where,$data){
	// 	$this->db->where($where);
	// 	$this->db->update($this->table3, $data);
	// }
	// function hapusSub($where){
	// 	$this->db->where($where);
	// 	$this->db->delete($this->table3);
	// }

	// function konsul(){
	// 	return $this->db->get($this->table2);
	// }

	

}
?>
