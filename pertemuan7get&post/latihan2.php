<?php 
// cek apakah tidak ada data di $_GET atau jika data nya belum di set paksa usernya untuk pindah
if( !isset($_GET["surah"]) ||
	!isset($_GET["ayat"]) || 
	!isset($_GET["diturunkan"]) || 
	!isset($_GET["urutan"]) ||
	!isset($_GET["gambar"])) {
	// redirect
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail ayat alquran</title>
</head>
<body>

<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>  " width="100" height="100"></li>
	<li><?= $_GET["surah"]; ?></li>
	<li><?= $_GET["ayat"]; ?></li>
	<li><?= $_GET["urutan"]; ?></li>
	<li><?= $_GET["diturunkan"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar alquran</a>

</body>
</html>