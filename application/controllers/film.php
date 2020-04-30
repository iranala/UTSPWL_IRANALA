<?php
/**
 * 
 */
class Film extends CI_Controller
{
	
	public function index()
	{
		$data ['film']=$this->m_film->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("film",$data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("film");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$id 		= $this->input -> post ('id');
		$judul 		= $this->input -> post ('judul');
		$deskripsi	= $this->input -> post ('deskripsi');
		$durasi 	= $this->input -> post ('durasi');
		$tanggal 	= $this->input -> post ('tanggal_tayang');
		$foto 		= $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] 		= './assets/foto';
			$config['allowed_types'] 	= 'jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo"Upload Gagal"; die();
			}else{
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'id'				=> $id,
			'judul'				=> $judul,
			'deskripsi'			=> $deskripsi,
			'durasi'			=> $durasi,
			'tanggal_tayang'	=> $tanggal,
			'foto' 				=> $foto
		);
		$this->m_film-> input_data($data, 'film');
		$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Data Berhasil Ditambahkan
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('film/index');
	}

	public function hapus ($id)
	{
		$where  = array ('id' => $id);
		$this->film->hapus_data($where, 'film');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Berhasil Dihapus
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect ('film/index');
	}
	public function editfilm ($id){
		$where = array('id' => $id);
		$data['film'] = $this->m_film->edit_data($where, 'film') ->result();
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("editfilm", $data);
		$this->load->view("template/footer");
	}
	public function update (){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$durasi = $this->input->post('durasi');
		$tanggal = $this->input->post('tanggal_tayang');

		$data = array(
			'id'				=> $id,
			'judul'				=> $judul,
			'deskripsi'			=> $deskripsi,
			'durasi'			=> $durasi,
			'tanggal_tayang'	=> $tanggal_tayang,
		);

		$where = array(
			'id' => $id
		);

		$this->m_film->update_data($where,$data,'film');
		$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Data Berhasil Diedit
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('film/index');
	}
	public function detailfilm($id){
		$this->load->model('m_film');
		$detail = $this->m_film->detail_data($id);
		$data['detailfilm'] = $detail;
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("detailfilm", $data);
		$this->load->view("template/footer");
	}

	public function cetak(){
		$data['film'] = $this->m_film->tampil_data("film")->result();
		$this->load->view('printfilm', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['film']=$this->m_film->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view("template/sidebar");
		$this->load->view("film", $data);
		$this->load->view("template/footer");

	}
}