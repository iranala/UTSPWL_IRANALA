<?php
/**
 * 
 */
class transaksi extends CI_Controller
{
	
	public function index()
	{
		$data ['transaksi']=$this->m_transaksi->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("transaksi",$data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("transaksi");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$tanggal 		= $this->input -> post ('tanagal');
		$hari 		= $this->input -> post ('hari');
		$film		= $this->input -> post ('film');
		$harga 		= $this->input -> post ('harga');
		$jumlah 	= $this->input -> post ('jumlah_beli');
		$totalbayar		= $this->input -> post ('total_bayar');
		$totalpemasukan		= $this->input -> post ('total_pemasukan');

		$data = array(
			'tanggal'				=> $tanggal,
			'hari'				=> $hari,
			'film'				=> $film,
			'harga'				=> $harga,
			'jumlah'	=> $jumlah,
			'total_bayar'		=> $totalbayar,
			'total_pemasukan'		=> $totalpemasukan
		);
		$this->m_transaksi-> input_data($data, 'transaksi');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Data Berhasil Ditambahkan
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('transaksi/index');
	}

	public function hapus ($tanggal)
	{
		$where  = array ('tanggal' => $tanggal);
		$this->m_transaksi->hapus_data($where, 'transaksi');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Berhasil Dihapus
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect ('transaksi/index');
	}
	public function edit ($tanggal){
		$where = array('tanggal' => $tanggal);
		$data['transaksi'] = $this->m_transaksi->edit_data($where, 'transaksi') ->result();
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("edit", $data);
		$this->load->view("template/footer");
	}
	public function update (){
		$tanggal 		= $this->input -> post ('tanagal');
		$hari 		= $this->input -> post ('hari');
		$film		= $this->input -> post ('film');
		$harga 		= $this->input -> post ('harga');
		$jumlah 	= $this->input -> post ('jumlah_beli');
		$totalbayar		= $this->input -> post ('total_bayar');
		$totalpemasukan		= $this->input -> post ('total_pemasukan');

		$data = array(
			'tanggal'				=> $tanggal,
			'hari'				=> $hari,
			'film'				=> $film,
			'harga'				=> $harga,
			'jumlah'	=> $jumlah,
			'total_bayar'		=> $totalbayar,
			'total_pemasukan'		=> $totalpemasukan
		);

		$where = array(
			'tanggal' => $tanggal
		);

		$this->m_transaksi->update_data($where,$data,'transaksi');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Data Berhasil Diedit
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('transaksi/index');
	}
	public function detailtransaksi($tanggal){
		$this->load->model('m_transaksi');
		$detail = $this->m_transaksi->detail_data($id);
		$data['detailtransaksi'] = $detail;
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("detailtransaksi", $data);
		$this->load->view("template/footer");
	}

	public function cetak(){
		$data['transaksi'] = $this->m_transaksi->tampil_data("transaksi")->result();
		$this->load->view('printtransaksi', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['transaksi']=$this->m_transaksi->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("transaksi", $data);
		$this->load->view("template/footer");

	}
}