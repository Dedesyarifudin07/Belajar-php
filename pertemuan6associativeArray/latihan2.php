<?php 
// $mahasiswa = [
// ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
// ["033040001", "Doddy Ferdiansyah", "doddy@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[	
		"nrp" => "043040023",
		"nama" => "Dede Syarifudin",
		"email" => "sandhikagalih@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "hahaha.png"
	],
	[
		"nama" => "Doddy Ferdiansyah", 
		"nrp" => "033040001",
		"email" => "doddy@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" =>"kok.png"
    ],
    [
		"nama" => "Doddy Ferdiansyah", 
		"nrp" => "033040001",
		"email" => "doddy@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" =>"ekekek.png"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"];?>" width="100" height="100" >
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>