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
			<th>Nama Customer</th>
			<th>Alamat</th>
			<th>Tanggal Tayang</th>
			<th>Jam Tayang</th>
			<th>Jumlah Beli</th>
		</tr>

		<tr>
			
		<?php
		$no= 1;
		foreach ($customer as $cst) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $cst->id ?></td>
				<td><?php echo $cst->nama ?></td>
				<td><?php echo $cst->alamat ?></td>
				<td><?php echo $cst->tanggal_tayang ?></td>
				<td><?php echo $cst->jam_tayang ?></td>
				<td><?php echo $cst->jumlah_beli ?></td>

			</tr>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print(); 
	</script>

</body>
</html>