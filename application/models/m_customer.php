	  <?php
/**
 * 
 */
class M_customer extends CI_Model
{
	
	public function tampil_data()
	{
		return $this -> db -> get ('customer');
	}
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function hapus_data($where, $table){
		$this ->db-> where($where);
		$this ->db-> delete($table);
	}
	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function detail_data($id=NULL){
		$query =$this->db->get_where('customer',array('id' => $id))->row();
		return $query;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->like('id',$keyword);
		$this->db->or_like('nama',$keyword);
		$this->db->or_like('alamat',$keyword);
		$this->db->or_like('tanggal_tayang',$keyword);
		$this->db->or_like('jam_tayang',$keyword);
		$this->db->or_like('jumlah_beli',$keyword);
		return $this->db->get()->result();
	}
}