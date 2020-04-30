<div class="content-wrapper">
	<section class="content">
		<?php foreach ($transaksi as $trs) { ?>
		<form action="<?php echo base_url()."index.php/transaksi/update"; ?>" method="post">

			<div class="form-group">
				<label>Tanggal</label>
				<input type="date" name="tanggal" class="form-control" value="<?php echo $trs->tanggal ?>">
			</div>
			
			<div class="form-group">
				<label>Hari</label>
				<input type="text" name="hari" class="form-control" value="<?php echo $trs->hari ?>">
			</div>

			<div class="form-group">
				<label>Film</label>
				<input type="text" name="film" class="form-control" value="<?php echo $trs->film ?>">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $trs->harga ?>">
			</div>

			<div class="form-group">
				<label>Jumlah Beli</label>
				<input type="text" name="jumlah_beli" class="form-control" value="<?php echo $trs->jumlah_beli ?>">
			</div>

			<div class="form-group">
				<label>Total Bayar</label>
				<input type="text" name="total_bayar" class="form-control" value="<?php echo $trs->total_bayar ?>">
			</div>

			<div class="form-group">
				<label>Total Pemasukan</label>
				<input type="text" name="total_pemasukan" class="form-control" value="<?php echo $trs->total_pemasukan ?>">
			</div>

			<button type="reset class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
	<?php } ?>
	</section>
</div>