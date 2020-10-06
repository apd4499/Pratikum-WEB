<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>

	<h1>Belajar PHP Guys</h1>


	<?php
	//--------- tipe data array ------
	$angka	= [5, 10, 7, 4, 3];
	$kotak	= array('Mobil', 'Motor', 'Sepeda', 'Kapal', 'Pesawat');
	$nama 	= ['Ajeng', 'Kipli', 'Joni'];

		//print_r($kotak);
		//echo $nama[0];


		//------- metode array --------
		//array_unique, _reverse, shuffle, count, sort

		sort($angka);
		echo $angka[0];	
	?>
</body>
</html>