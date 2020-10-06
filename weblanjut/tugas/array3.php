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

		//sort($angka);
		//echo $angka[0];	

		//echo count($nama);

		//---------- Associative array ---------
		// key => isi

		$data = array(	"nama" 	=> "Ajeng" ,
						"umur" 	=> 21 , 
						"kerja" => "public relation"
				);

		$data2 = array(	"suami" => "Belum ada" ,
						"laptop" 	=> "Asus ROG"
				);
		//print_($data);
		//$data['nama'] = "Ajeng Pratiwi";
		//echo "Nama adalah " . $data['nama'];

		//--------- metode associative array ------
		// array_values array_keys array_merge
		print_r( array_merge($data, $data2));
	?>

</body>
</html>