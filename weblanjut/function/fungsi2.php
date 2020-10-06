<?php
/*
	Hitung Luas segitiga dimana inputan berasal dari kode program

	Luas Segitiga
	alas = 10
	tinggi = 20
	luas = 100
*/


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	function luasSegitiga($alas, $tinggi) {

	return 0.5 * $alas * $tinggi; 
	}
$a = 10;
$t = 20;
?>
Tabel Luas Segitiga
<table width="800" border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Alas</th>
			<th>Tinggi</th>
			<th>Hasil</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td><?php echo $a; ?></td>
			<td><?php echo $t; ?></td>
			<td><?php echo luasSegitiga($a,$t); ?></td>
		</tr>
	</tbody>
</table>
</body>
</html>