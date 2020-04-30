<div class="content-wpapper">
	<section class="content-wpapper">
<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-digital-tachograph">
            Jadwal</h1></i>
          </div>
      </section>
      <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class= "fa fa-plus"></i> Tambah Jadwal</button>

        <a class="btn btn-danger" href="<?php echo base_url('index.php/jadwal/print/')?>"><i class="fa fa-print"></i>Print</a>

        <div class="form-inline mr-auto float-sm-right navbar-form navbar-right">
          <?php echo form_open('jadwal/search') ?>
          <input type="text" name="keyword" class="form-control" placeholder="Search">
          <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close()?>
        </div>
      	<table class="table table-striped">
      		<tr>
      			<th class="table-dark">No</th>
      			<th class="table-dark">Id</th>
      			<th class="table-dark">Hari</th>
      			<th class="table-dark">Harga</th>
      			<th class="table-dark">Film</th>
      			<th class="table-dark">Tanggal Tayang</th>
            <th class="table-dark">Jam Tayang</th>
            <th class="table-dark"colspan="3">Aksi</th>
      		</tr>
      		<?php
      		$no=1;
      		foreach ($jadwal as $jdl) : ?>
      		<tr>
      			<td><?php echo $no++ ?></td>
      			<td><?php echo $jdl->id ?></td>
      			<td><?php echo $jdl->hari ?></td>
      			<td><?php echo $jdl->harga ?></td>
      			<td><?php echo $jdl->film ?></td>
            <td><?php echo $jdl->tanggal_tayang ?></td>
      			<td><?php echo $jdl->jam_tayang ?></td>
            <td><?php echo anchor('jadwal/detailjadwal/'.$jdl->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Yakin Menghapus?')"><?php echo anchor('jadwal/hapus/'.$jdl->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td><?php echo anchor ('jadwal/editjadwal/'.$jdl->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
      		</tr>
      	<?php endforeach; ?>

      	</table>
      </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT JADWAL</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method ="post" action="<?php echo base_url().'index.php/jadwal/tambah_aksi' ?>"> 

          <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" class="form-control">
          </div> 

          <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control">
          </div> 

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div> 

          <div class="form-group">
            <label>Film</label>
            <input type="text" name="film" class="form-control">
          </div> 

          <div class="form-group">
            <label>Tanggal Tayang</label>
            <input type="date" name="tanggal_tayang" class="form-control">
          </div> 

          <div class="form-group">
            <label>Jam Tayang</label>
            <input type="time" name="jam_tayang" class="form-control">
          </div> 

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan </button>
          
        </form>
      </div>
    </div>
  </div>
</div>
</div>