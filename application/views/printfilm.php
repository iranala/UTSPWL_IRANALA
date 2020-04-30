<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Durasi</th>
			<th>Tanggal Tayang</th>
		</tr>

		<tr>
			
		<?php
		$no= 1;
		foreach ($film as $flm) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $flm->id ?></td>
				<td><?php echo $flm->judul ?></td>
				<td><?php echo $flm->deskripsi ?></td>
				<td><?php echo $flm->durasi ?></td>
				<td><?php echo $flm->tanggal_tayang ?></td>

			</tr>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print(); 
	</script>

</body>
</html>