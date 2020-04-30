<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL JADWAL</strong></h4>

		 <table class="table">
		 	<tr>
		 		<th>Id</th>
		 		<td><?php echo $detailjadwal->id ?></td>
		 	</tr>
		 	<tr>
		 		<th>Hari</th>
		 		<td><?php echo $detailjadwal->hari ?></td>
		 	</tr> 
		 	<tr>
		 		<th>Harga</th>
		 		<td><?php echo $detailjadwal->harga ?></td>
		 	</tr>
		 	<tr>
		 		<th>Film</th>
		 		<td><?php echo $detailjadwal->film ?></td>
		 	</tr>
		 	<tr>
		 		<th>Tanggal Tayang</th>
		 		<td><?php echo $detailjadwal->tanggal_tayang ?></td>
		 	</tr>
		 	<tr>
		 		<th>Jam Tayang</th>
		 		<td><?php echo $detailjadwal->jam_tayang ?></td>
		 	</tr>
		 </table>

		 <a href="<?php echo base_url('index.php/jadwal/index');?>" class="btn btn-primary">Kembali</a>
	</section>
</div>