<?php 
require 'functions.php';
$pelajar = query("SELECT * FROM pelajar");

// jika tombol cari di klik
if(isset($_POST["cari"])){
	$pelajar = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah data</a>
<form action="" method="post">
	<input type="text" name='keyword' size="25" autofocus placeholder="masukan keyword pencarian" autocomplete="off"/>
	<button type="submit" name="cari">cari!!</button>
</form>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $pelajar as $pjr ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $pjr["id"]?>">ubah</a> |
			<a href="hapus.php?id=<?= $pjr["id"]?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?= $pjr["nama"]?></td>
		<td><?= $pjr["jurusan"]?> </td>
		<td><?= $pjr["kelas"]?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>