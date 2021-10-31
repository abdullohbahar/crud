<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Matakuliah</title>
</head>

<body>
	<center>

		<form action="<?= base_url('matakuliah/cetak') ?>" method="POST">
			<table>
				<tr>
					<th colspan="3">
						Form Input Data Mata Kuliah
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>Kode MTK</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode" value="<?= set_value('kode') ?>">
					</td>
					<td>
						<?= form_error('kode') ?>
					</td>
				</tr>
				<tr>
					<th>Nama MTK</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>">
					</td>
					<td>
						<?= form_error('nama') ?>
					</td>
				</tr>
				<tr>
					<th>SKS</th>
					<th>:</th>
					<td>
						<select name="sks" id="sks">
							<option value="">Pilih SKS</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</td>
					<td>
						<?= form_error('sks') ?>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>

		<br><br>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Kode Matakuliah</th>
				<th>Nama Matakuliah</th>
				<th>SKS</th>
				<th colspan="2">action</th>
			</tr>
			<?php
            $no=1
        ?>
			<?php foreach($matkul as $matkul): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $matkul->kode ?></td>
				<td><?= $matkul->sks ?></td>
				<td><a href="<?= base_url('Matakuliah/edit/'.$matkul->kode)?>">Edit</td>
				<td><a href="<?= base_url('Matakuliah/hapus/'.$matkul->kode)?>">Hapus</td>
			</tr>
			<?php endforeach?>
		</table>
	</center>
</body>

</html>