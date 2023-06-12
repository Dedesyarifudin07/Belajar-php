<?php 
require 'functions.php';
$alquran = query("SELECT * FROM alquran");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $alquran as $quran ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">ubah</a> |
			<a href="">hapus</a>
		</td>
		<td><img src="img/<?= $quran["gambar"]?>" width="50"></td>
		<td><?= $quran["surat"]?></td>
		<td><?= $quran["ayat"]?> </td>
		<td><?= $quran["jenis_surat"]?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>