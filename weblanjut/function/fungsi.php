<?php
	function fungsiku($namaDepan, $namaBelakang) {
		//koding
		echo "Halo fungsi";
		echo "<br>Nama saya" .$namaDepan." ".$namaBelakang;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?php fungsiku("Alif Putra", "Dafianto")?></h1>
<h1><?php fungsiku("John")?></h1>
<h1><?php fungsiku("Smith")?></h1>
<h1><?php fungsiku("Johan")?></h1>
</body>
</html>