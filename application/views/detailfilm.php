<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL DATA FILM</strong></h4>

		 <table class="table">
		 	<tr>
		 		<th>Id</th>
		 		<td><?php echo $detailfilm->id ?></td>
		 	</tr>
		 	<tr>
		 		<th>Judul</th>
		 		<td><?php echo $detailfilm->judul?></td>
		 	</tr> 
		 	<tr>
		 		<th>Deskripsi</th>
		 		<td><?php echo $detailfilm->deskripsi ?></td>
		 	</tr>
		 	<tr>
		 		<th>Durasi</th>
		 		<td><?php echo $detailfilm->durasi ?></td>
		 	</tr>
		 	<tr>
		 		<th>Tanggal Tayang</th>
		 		<td><?php echo $detailfilm->tanggal_tayang ?></td>
		 	</tr>
		 </table>

		 <a href="<?php echo base_url('index.php/film/index');?>" class="btn btn-primary">Kembali</a>
	</section>
</div>