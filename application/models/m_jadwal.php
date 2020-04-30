<?php
/**
 * 
 */
class M_jadwal extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('jadwal');
	}
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function detail_data($id=NULL){
		$query =$this->db->get_where('jadwal',array('id' => $id))->row();
		return $query;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->like('id',$keyword);
		$this->db->or_like('hari',$keyword);
		$this->db->or_like('harga',$keyword);
		$this->db->or_like('film',$keyword);
		$this->db->or_like('tanggal_tayang',$keyword);
		$this->db->or_like('jam_tayang',$keyword);
		return $this->db->get()->result();
	}
}