<div class="content-wpapper">
  <section class="content-wpapper">
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-digital-tachograph">
            Data Transaksi</h1></i>
          </div>
      </section>
      <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class= "fa fa-plus"></i> Tambah Data Transaksi</button>

        <a class="btn btn-danger" href="<?php echo base_url('index.php/transaksi/cetak/')?>"><i class="fa fa-print"></i>Print</a>

        <div class="form-inline mr-auto float-sm-right navbar-form navbar-right">
          <?php echo form_open('transaksi/search') ?>
          <input type="text" name="keyword" class="form-control" placeholder="Search">
          <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close()?>
        </div>
        <table class="table table-striped">
          <tr>
            <th class="table-dark">No</th>
            <th class="table-dark">Tanggal</th>
            <th class="table-dark">Hari</th>
            <th class="table-dark">Film</th>
            <th class="table-dark">Harga</th>
            <th class="table-dark">Jumlah Beli</th>
            <th class="table-dark">Total Bayar</th>
            <th class="table-dark">Total Pemasukan</th>
            <th class="table-dark"colspan="2">Aksi</th>
          </tr>
          <?php
          $no=1;
          foreach ($transaksi as $trs) : ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $trs->tanggal ?></td>
            <td><?php echo $trs->hari ?></td>
            <td><?php echo $trs->film ?></td>
            <td><?php echo $trs->harga ?></td>
            <td><?php echo $trs->jumlah_beli ?></td>
            <td><?php echo $trs->total_bayar ?></td>
            <td><?php echo $trs->total_pemasukan ?></td>
            <td><?php echo anchor('film/detailtransaksi/'.$trs->tanggal,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Yakin Menghapus?')"><?php echo anchor('transaksi/hapus/'.$trs->tanggal,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td><?php echo anchor ('transaksi/edittransaksi/'.$trs->tanggal,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>

        </table>
      </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA TRANSAKSI</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method ="post" action="<?php echo base_url().'index.php/transaksi/tambah_aksi' ?>"> 

          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
          </div> 

          <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control">
          </div> 

          <div class="form-group">
            <label>Film</label>
            <input type="text" name="film" class="form-control">
          </div> 

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div> 

          <div class="form-group">
            <label>Jumlah Beli</label>
            <input type="text" name="jumlah_beli" class="form-control">
          </div> 

          <div class="form-group">
            <label>Total Bayar</label>
            <input type="text" name="total_bayar" class="form-control">
          </div> 

          <div class="form-group">
            <label>Total Pemasukan</label>
            <input type="text" name="total_pemasukan" class="form-control">
          </div> 

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan </button>
          
        </form>
      </div>
    </div>
  </div>
</div>
</div>