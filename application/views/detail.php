<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL DATA CUSTOMER</strong></h4>

		 <table class="table">
		 	<tr>
		 		<th>Id</th>
		 		<td><?php echo $detail->id ?></td>
		 	</tr>
		 	<tr>
		 		<th>Nama Customer</th>
		 		<td><?php echo $detail->nama ?></td>
		 	</tr> 
		 	<tr>
		 		<th>Alamat</th>
		 		<td><?php echo $detail->alamat ?></td>
		 	</tr>
		 	<tr>
		 		<th>Tanggal Tayang</th>
		 		<td><?php echo $detail->tanggal_tayang ?></td>
		 	</tr>
		 	<tr>
		 		<th>Jam Tayang</th>
		 		<td><?php echo $detail->jam_tayang ?></td>
		 	</tr>
		 	<tr>
		 		<th>Jumlah Beli</th>
		 		<td><?php echo $detail->jumlah_beli ?></td>
		 	</tr>
		 </table>

		 <a href="<?php echo base_url('index.php/customer/index');?>" class="btn btn-primary">Kembali</a>
	</section>
</div>