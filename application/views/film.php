<div class="content-wpapper">
  <section class="content-wpapper">
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-digital-tachograph">
            Data Film</h1></i>
          </div>
      </section>
      <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class= "fa fa-plus"></i> Tambah Data Film</button>

        <a class="btn btn-danger" href="<?php echo base_url('index.php/film/cetak/')?>"><i class="fa fa-print"></i>Print</a>

        <div class="form-inline mr-auto float-sm-right navbar-form navbar-right">
          <?php echo form_open('film/search') ?>
          <input type="text" name="keyword" class="form-control" placeholder="Search">
          <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close()?>
        </div>
        <table class="table table-striped">
          <tr>
            <th class="table-dark">No</th>
            <th class="table-dark">Id</th>
            <th class="table-dark">Judul</th>
            <th class="table-dark">Deskripsi</th>
            <th class="table-dark">Durasi</th>
            <th class="table-dark">Tanggal Tayang</th>
            <th class="table-dark"colspan="2">Aksi</th>
          </tr>
          <?php
          $no=1;
          foreach ($film as $flm) : ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $flm->id ?></td>
            <td><?php echo $flm->judul ?></td>
            <td><?php echo $flm->deskripsi ?></td>
            <td><?php echo $flm->durasi ?></td>
            <td><?php echo $flm->tanggal_tayang ?></td>
            <td><?php echo anchor('film/detailfilm/'.$flm->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Yakin Menghapus?')"><?php echo anchor('film/hapus/'.$flm->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td><?php echo anchor ('film/editfilm/'.$flm->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>

        </table>
      </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA FILM</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('film/tambah_aksi'); ?>

          <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" class="form-control">
          </div> 

          <div class="form-group">
            <label>Judul Film</label>
            <input type="text" name="judul" class="form-control">
          </div> 

          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control">
          </div> 

          <div class="form-group">
            <label>Durasi</label>
            <input type="time" name="durasi" class="form-control">
          </div> 

          <div class="form-group">
            <label>Tanggal Tayang</label>
            <input type="date" name="tanggal_tayang" class="form-control">
          </div> 

          <div class="form-group">
            <label>Apload Foto</label>
            <input type="file" name="foto" class="form-control">
          </div> 

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan </button>
          
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>