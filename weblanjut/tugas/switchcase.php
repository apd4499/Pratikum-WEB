<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP YOK</title>
</head>
<body>

	<h1>Logika di PHP</h1>

	<?php
	//--------- tipe data boolean -------
	// $hasil 	= true;
	// $hasil2	= false;

	//--------- if dan else ----------
	//----- else if
	// operator logika == === > >= < <= !=
//	$uang_programmer	= 1000;
//	$keyboard			= 2000;
//	$uang_designer		= 4000;

//	if ( $uang_programmer > $keyboard) {
//		echo ' dibeli';
//	}elseif ( $uang_designer > $keyboard) {
	//	echo 'dibeli oleh designer';

		//--if bercabang
	//	if ($uang_designer >= $keyboard * 2) {
	//		echo 'dibeli duakali oleh designer';
	//	}

	//}
	//else{
	//	echo 'tidak cukup';
	//}

	//switch case

	$nama = "Ajeng123n";

	switch ($nama) {
		case 'Andy':
			echo 'namanya Andy';
			break;
		case 'Ajeng':
			echo 'namanya Ajeng';
			break;
			case 'Kipli':
			echo 'namanya Kipli';
			break;
		default:
			echo 'tidak ada yang benar';
	}


	?>
</body>
</html>