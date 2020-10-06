<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
	<body>
		<?php
		if (isset($_GET['city'])) {
			$kota = 1;
			if ($_GET['city'] == 2) {
				$kota = 2;
			}
			elseif ($_GET['city'] == 3) {
				$kota = 3;
			};
		}
		else {
			$kota = 1;
		}
		
		?>
	<header>
		<?php
			include 'header.php';
		?>
	</header>
	<main>
		<?php
			include 'content.php';
		?>
	</main>
	<footer>
		<?php
			include 'footer.php';
		?>
	</footer>
</body>
</html>