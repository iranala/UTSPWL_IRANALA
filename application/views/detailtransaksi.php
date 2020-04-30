<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL DATA TRANSAKSI</strong></h4>

		 <table class="table">
		 	<tr>
		 		<th>Tanggal</th>
		 		<td><?php echo $detailtransaksi->tanggal ?></td>
		 	</tr>
		 	<tr>
		 		<th>Hari</th>
		 		<td><?php echo $detailtransaksi->hari?></td>
		 	</tr> 
		 	<tr>
		 		<th>Film</th>
		 		<td><?php echo $detailtransaksi->film ?></td>
		 	</tr>
		 	<tr>
		 		<th>Harga</th>
		 		<td><?php echo $detailtransaksi->harga ?></td>
		 	</tr>
		 	<tr>
		 		<th>Jumlah Beli</th>
		 		<td><?php echo $detailtransaksi->jumlah_beli ?></td>
		 	</tr>
		 	<tr>
		 		<th>Total Bayar</th>
		 		<td><?php echo $detailtransaksi->total_bayar ?></td>
		 	</tr>
		 	<tr>
		 		<th>Total Pemasukan</th>
		 		<td><?php echo $detailtransaksi->total_pemasukan ?></td>
		 	</tr>
		 </table>

		 <a href="<?php echo base_url('index.php/transaksi/index');?>" class="btn btn-primary">Kembali</a>
	</section>
</div>