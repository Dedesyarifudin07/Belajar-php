<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
	<style>
		.kotak {
            width:200px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			margin: 10px 10px;
			display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
            align-items:space-around;
            gap:20px;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		/* .clear {
			clear: both;
		} */
	</style>
</head>
<body>

<?php 
$angka = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?>
    <div class="kotak">
	<?php foreach( $a as $b ) : ?>
           <div><?= $b; ?></div> 
     <?php endforeach; ?>
    </div>
	<!-- <div class="clear"></div> -->
<?php endforeach; ?>







</body>
</html>