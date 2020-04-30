<?php
/**
 * 
 */
class Jadwal extends CI_Controller
{
	
	public function index()
	{
		$data ['jadwal']=$this->m_jadwal->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("jadwal",$data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("jadwal");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$id 		= $this->input -> post ('id');
		$hari 		= $this->input -> post ('hari');
		$harga		= $this->input -> post ('harga');
		$film 		= $this->input -> post ('film');
		$tanggal 	= $this->input -> post ('tanggal_tayang');
		$jam		= $this->input -> post ('jam_tayang');

		$data = array(
			'id'				=> $id,
			'hari'				=> $hari,
			'harga'				=> $harga,
			'film'				=> $film,
			'tanggal_tayang'	=> $tanggal,
			'jam_tayang'		=> $jam,
		);
		$this->m_jadwal-> input_data($data, 'jadwal');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Data Berhasil Ditambahkan
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('jadwal/index');
	}

	public function hapus ($id)
	{
		$where  = array ('id' => $id);
		$this->m_jadwal->hapus_data($where, 'jadwal');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Berhasil Dihapus
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect ('jadwal/index');
	}
	public function edit ($id){
		$where = array('id' => $id);
		$data['jadwal'] = $this->m_jadwal->edit_data($where, 'jadwal') ->result();
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("edit", $data);
		$this->load->view("template/footer");
	}
	public function update (){

		$id 		= $this->input -> post ('id');
		$hari 		= $this->input -> post ('hari');
		$harga		= $this->input -> post ('harga');
		$film 		= $this->input -> post ('film');
		$tanggal 	= $this->input -> post ('tanggal_tayang');
		$jam		= $this->input -> post ('jam_tayang');

		$data = array(
			'id'				=> $id,
			'hari'				=> $hari,
			'harga'				=> $harga,
			'film'				=> $film,
			'tanggal_tayang'	=> $tanggal,
			'jam_tayang'		=> $jam,
		);

		$where = array(
			'id' => $id
		);

		$this->m_jadwal->update_data($where,$data,'jadwal');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Data Berhasil Diedit
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('jadwal/index');
	}
	public function detailjadwal($id){
		$this->load->model('m_jadwal');
		$detail = $this->m_jadwal->detail_data($id);
		$data['detailjadwal'] = $detail;
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("detailjadwal", $data);
		$this->load->view("template/footer");
	}

	public function cetak(){
		$data['jadwal'] = $this->m_jadwal->tampil_data("jadwal")->result();
		$this->load->view('printjadwal', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['jadwal']=$this->m_jadwal->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("jadwal", $data);
		$this->load->view("template/footer");

	}
}