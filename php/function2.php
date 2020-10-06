<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP Yok</title>
</head>
<body>
	<h1>Fungsi PHP</h1>

	<?php
		//------- fungsi ------

		//parameter
		function print_text( $text, $angka )
		{
			$text = "gedung " . $text . " " . $angka;
			echo "---------";
			echo "$text";
			echo "---------";
		}

		function jarak(){
			echo "<br>";
		}

		print_text("koding", 21);
		jarak();
		print_text("designer", 21);
		jarak();
		print_text("mengemudi", 223);

	?>
</body>
</html>