<?php
/**
 * 
 */
class Customer extends CI_Controller
{
	
	public function index()
	{
		$data ['customer']=$this->m_customer->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("customer",$data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("customer");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$id 		= $this->input -> post ('id');
		$nama 		= $this->input -> post ('nama');
		$alamat		= $this->input -> post ('alamat');
		$tanggal 	= $this->input -> post ('tanggal_tayang');
		$jam 		= $this->input -> post ('jam_tayang');
		$jumlah		= $this->input -> post ('jumlah_beli');

		$data = array(
			'id'				=> $id,
			'nama'				=> $nama,
			'alamat'			=> $alamat,
			'tanggal_tayang'	=> $tanggal,
			'jam_tayang'		=> $jam,
			'jumlah_beli'		=> $jumlah,
		);
		$this->m_customer-> input_data($data, 'customer');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Data Berhasil Ditambahkan
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('customer/index');
	}

	public function hapus ($id)
	{
		$where  = array ('id' => $id);
		$this->m_customer->hapus_data($where, 'customer');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Berhasil Dihapus
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect ('customer/index');
	}
	public function edit ($id){
		$where = array('id' => $id);
		$data['customer'] = $this->m_customer->edit_data($where, 'customer') ->result();
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("edit", $data);
		$this->load->view("template/footer");
	}
	public function update (){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tanggal = $this->input->post('tanggal_tayang');
		$jam = $this->input->post('jam_tayang');
		$jumlah = $this->input->post('jumlah_beli');

		$data = array(
			'id' 				=> $id,
			'nama' 				=> $nama,
			'alamat'			=> $alamat,
			'tanggal_tayang' 	=> $tanggal,
			'jam_tayang' 		=> $jam,
			'jumlah_beli' 		=> $jumlah,
		);

		$where = array(
			'id' => $id
		);

		$this->m_customer->update_data($where,$data,'customer');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Data Berhasil Diedit
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('customer/index');
	}
	public function detail($id){
		$this->load->model('m_customer');
		$detail = $this->m_customer->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("detail", $data);
		$this->load->view("template/footer");
	}

	public function cetak(){
		$data['customer'] = $this->m_customer->tampil_data("customer")->result();
		$this->load->view('printcustomer', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['customer']=$this->m_customer->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("customer", $data);
		$this->load->view("template/footer");

	}
}