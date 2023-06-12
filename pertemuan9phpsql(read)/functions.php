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

?>