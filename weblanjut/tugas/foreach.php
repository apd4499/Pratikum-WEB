<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP Kuy</title>
</head>
<body>

	<h1>Loop PHP</h1>

	<?php
		//--------- Pengulangan -------
		//for(variabelawal(mulai); batas(syarat); perubahan)

		$hewan = ['anjing', 'babi', 'cicak', 'sapi', 'kuda'];

		for ($i=0; $i < count($hewan) - 1; $i++) 
		{ 
			echo "----------------";
			echo $hewan [$i];
			echo "---------------- <br>";
		}

		foreach ($hewan as $h) {
			echo "----------------";
			echo $h;
			echo "---------------- <br>";
		}

	?>
	
</body>
</html>