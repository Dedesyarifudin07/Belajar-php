<?php 
//koneksi ke database
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    //ambil variabel conn dari luar function tapi kalo di js pake keyword this untuk akses variabel global
    global $conn;
    //ambil data (fetch) ada dua paramete
    $result =mysqli_query($conn,$query);
    //siapkan array kosong untuk menammpung nilai nya
    $rows=[];
    //looping array
    while( $row = mysqli_fetch_assoc($result) ) {
        //kemudian tampung nilai nya ke array rows
		$rows[] = $row;
	}
    //kembalikan nilai yang sudah di pindahkan dari data ke array
	return $rows;
}

function tambah($data){
     //ambil variabel conn dari luar function
    global $conn;
    // ambil data dari tiap element dalam form
	$nama = htmlspecialchars($data["nama"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$kelas = htmlspecialchars($data["kelas"]);

    // query insert data 
	$query ="INSERT INTO pelajar (`id`, `nama`, `jurusan`, `kelas`) 
    VALUES (NULL, '$nama', '$jurusan', '$kelas')";

    //lalu query
    mysqli_query($conn,$query);

    //mengembalikan data berupa angka dari response si $conn
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM pelajar WHERE `pelajar`.`id` = $id");

    return mysqli_affected_rows($conn);
}


function ubah($edit){
   //ambil variabel conn dari luar function
   global $conn;
   // ambil data dari tiap element dalam form
   $id = $edit["id"];
   $nama = htmlspecialchars($edit["nama"]);
   $jurusan = htmlspecialchars($edit["jurusan"]);
   $kelas = htmlspecialchars($edit["kelas"]);

   // query insert data 
   $query ="UPDATE pelajar SET 
                     nama = '$nama',
                     jurusan = '$jurusan',  
                     kelas = '$kelas' 
                     WHERE id = $id ";
  
   //lalu query
   mysqli_query($conn,$query);

   //mengembalikan data berupa angka dari response si $conn
   return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM pelajar 
            WHERE 
    nama LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' OR
    kelas LIKE '%$keyword%'
    ";
    return query($query);
}

?>