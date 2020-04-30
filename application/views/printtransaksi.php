<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Hari</th>
			<th>Film</th>
			<th>Harga</th>
			<th>Jumlah Beli</th>
			<th>Total Bayar</th>
			<th>Total Pemasukan</th>
		</tr>

		<tr>
			
		<?php
		$no= 1;
		foreach ($transaksi as $trs) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $trs->tanggal ?></td>
				<td><?php echo $trs->hari ?></td>
				<td><?php echo $trs->film ?></td>
				<td><?php echo $trs->harga ?></td>
				<td><?php echo $trs->jumlah_beli ?></td>
				<td><?php echo $trs->total_bayar ?></td>
				<td><?php echo $trs->total_pemasukan ?></td>

			</tr>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print(); 
	</script>

</body>
</html>