<?php 
//supergloballs
//merupakan array associative
// $_GET
// echo $_SERVER["SERVER_SOFTWARE"];

// $_GET["AYAT"]=["AL-WAQIAH"];
// var_dump($_GET);

$Alquran = [
	[	
		"surah" => "alfatihah",
		"diturunkan" => "mekkah",
		"ayat" => 7,
		"urutan" => 1,
		"gambar" => "hahaha.png"

	],
	[
		// "nama" => "Doddy Ferdiansyah", 
		// "nrp" => "033040001",
		// "email" => "doddy@gmail.com",
		// "jurusan" => "Teknik Industri",
		"surah" => "albaqarah",
		"diturunkan" => "madinah",
		"ayat" => 186,
		"urutan" => 2,
		"gambar" => "ekekek.png"
	],

];

var_dump($Alquran);
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar ayat ALquran</h1>
<ul>
<?php foreach( $Alquran as $quran ) : ?>
	<li>
		<a href="latihan2.php?surah=<?= $quran["surah"]; ?>&ayat=<?= $quran["ayat"]; ?>&diturunkan=<?= $quran["diturunkan"]; ?>&urutan=<?= $quran["urutan"]; ?>&gambar=<?= $quran["gambar"]; ?>"><?= $quran["surah"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>