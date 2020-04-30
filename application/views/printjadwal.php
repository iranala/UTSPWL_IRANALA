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
			<th>Hari</th>
			<th>Harga</th>
			<th>Film</th>
			<th>Tanggal Tayang</th>
			<th>Jam Tayang</th>
		</tr>

		<tr>
			
		<?php
		$no= 1;
		foreach ($jadwal as $jdl) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $jdl->id ?></td>
				<td><?php echo $jdl->hari ?></td>
				<td><?php echo $jdl->harga ?></td>
				<td><?php echo $jdl->film ?></td>
				<td><?php echo $jdl->tanggal_tayang ?></td>
				<td><?php echo $jdl->jam_tayang ?></td>

			</tr>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print(); 
	</script>

</body>
</html>