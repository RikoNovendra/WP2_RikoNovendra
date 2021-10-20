<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Output</title>
</head>
<style>
	fieldset {
		width: 25%;
		margin: 20px auto;
		border-radius: 5px;
	}
	select {
		width: 100%;
	}
</style>

<body>
	<?php echo validation_errors(); ?>
	<fieldset>	
		<legend>Output Transaksi</legend>
	
	<center>
		<table>
			<tr>
				<th colspan="3">Nama Pembeli</th>
				<td>:</td>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			
			<tr>
				<th colspan="3">Nomor HP</th>
				<td>:</td>
				<td>
					<?= $nohp; ?>
				</td>
			</tr>		

			<tr>
				<th colspan="3">Merk Sepatu</th>
				<td>:</td>
				<td>
					<?= $merk; ?>
				</td>
			</tr>

			<tr>
				<th colspan="3">Harga</th>
				<td>:</td>
				<td>
					<?= $harga; ?>
				</td>
			</tr>

			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('toko'); ?> ">Kembali</a>

				</td>
			</tr>

		</table>
	</fieldset>
	</center>

</body>
</html>