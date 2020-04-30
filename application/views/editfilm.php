<div class="content-wrapper">
	<section class="content">
		<?php foreach ($film as $flm) { ?>
		<form action="<?php echo base_url()."index.php/film/update"; ?>" method="post">

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id" class="form-control" value="<?php echo $flm->id ?>">
			</div>
			
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" value="<?php echo $flm->judul ?>">
			</div>

			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" name="deskripsi" class="form-control" value="<?php echo $flm->deskripsi ?>">
			</div>

			<div class="form-group">
				<label>Durasi</label>
				<input type="text" name="durasi" class="form-control" value="<?php echo $flm->durasi ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Tayang</label>
				<input type="text" name="tanggal" class="form-control" value="<?php echo $flm->tanggal_tayang ?>">
			</div>

			<button type="reset class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php } ?>
	</section>
</div>