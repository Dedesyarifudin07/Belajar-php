<?php 
// koneksi ke database
 $db = mysqli_connect("localhost", "root", "", "phpdasar");

//  ambil data dari tabel alquran /query data alguran
$result=mysqli_query($db,"SELECT * FROM alquran ");
//jika ada error
// if(!$result){
//     echo mysqli_error($db);
// }
// foreach($result as $row){
//     echo $row["surat"];
// }
// var_dump($result);

//ambil data (fetch) alquran dari object result
// mysqli_fetch_row() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array asosiative
// mysqli_fecth_array() 
// mysqli_fetch_object()

// while($alquran = mysqli_fetch_array($result)){
//     var_dump($alquran);
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
    <style>
        table{
            border: 1px;
        }
    </style>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table  border="1" cellpadding="10" cellspacing="0">
    <?php $i=1; ?>
<?php while($row=mysqli_fetch_assoc($result)) :?>
	<tr>
        <th>No.</th>
		<th>aksi</th>
		<th>gambar</th>
		<th>surat</th>
		<th>ayat</th>
		<th>jenis surat</th>
	</tr>

	<tr>
        <td><?= $i; ?></td>
		<td>
			<a href="">ubah</a> |
			<a href="">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]?>" width="50"></td>
		<td><?= $row["surat"]?></td>
		<td><?= $row["ayat"]?> </td>
		<td><?= $row["jenis_surat"]?></td>
	</tr>
    <?php $i++; ?>
	<?php endwhile;?>
</table>

</body>
</html>