<div class="content-wrapper">
	<section class="content">
		<?php foreach ($jadwal as $jdl) { ?>
		<form action="<?php echo base_url()."index.php/jadwal/update"; ?>" method="post">

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id" class="form-control" value="<?php echo $jdl->id ?>">
			</div>
			
			<div class="form-group">
				<label>Hari</label>
				<input type="text" name="hari" class="form-control" value="<?php echo $jdl->hari ?>">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $jdl->harga ?>">
			</div>

			<div class="form-group">
				<label>Film</label>
				<input type="date" name="film" class="form-control" value="<?php echo $jdl->film ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Tayang</label>
				<input type="time" name="tanggal_tayang" class="form-control" value="<?php echo $jdl->tanggal_tayang ?>">
			</div>

			<div class="form-group">
				<label>Jam Tayang</label>
				<input type="text" name="jam_tayang" class="form-control" value="<?php echo $jdl->jam_tayang ?>">
			</div>

			<button type="reset class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php } ?>
	</section>
</div>