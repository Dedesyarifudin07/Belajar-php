<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 1</title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

<table  cellpadding="10" cellspacing="0">
	<!-- baris -->
	<?php for( $i = 1; $i <= 5; $i++ ) : ?>
		<!-- jika kelas nya ganjil beri class warba-baris -->
		<?php if( $i % 2 == 0 ) : ?>
			<tr class="warna-baris">
		<?php else : ?>
			<tr>
		<?php endif; ?>
		<!-- kolom -->
			<?php for( $j = 1; $j <= 5; $j++ ) : ?>
				  <!-- singkatan tag php echo -->
				<td><?= "$i, $j"; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>

	
</body>
</html>
 <!-- // perulangan php
// for ,while ,do ..while,foreach = perulangankhusu array

// for($i = 1 ; $i < 5 ; $i++){
// 	echo" bangsat kau <br>";
// }
// $i= 0;
// while($i < 5){
// 	echo "bangsat kau";
// 		$i++;

// }
//lakukan dulu baru cek kondisinya
// do{

// }while(){

// }s -->



