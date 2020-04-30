<div class="content-wrapper">
	<section class="content">
		<?php foreach ($customer as $cst) { ?>
		<form action="<?php echo base_url()."index.php/customer/update"; ?>" method="post">

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id" class="form-control" value="<?php echo $cst->id ?>">
			</div>
			
			<div class="form-group">
				<label>Nama Customer</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $cst->nama ?>">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $cst->alamat ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Tayang</label>
				<input type="date" name="tanggal" class="form-control" value="<?php echo $cst->tanggal_tayang ?>">
			</div>

			<div class="form-group">
				<label>Jam Tayang</label>
				<input type="time" name="jam" class="form-control" value="<?php echo $cst->jam_tayang ?>">
			</div>

			<div class="form-group">
				<label>Jumlah Beli</label>
				<input type="text" name="jumlah" class="form-control" value="<?php echo $cst->jumlah_beli ?>">
			</div>

			<button type="reset class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php } ?>
	</section>
</div>