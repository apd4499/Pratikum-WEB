<h1>Tes Program Nested IF</h1>

<?php

	$umur=17;

if($umur<=10){
    echo "Usia Anda tergolong Anak-anak";
} elseif ($umur<=18){
    echo "Usia Anda tergolong Remaja";
}elseif ($umur<=35){
    echo "Usia Anda tergolong Dewasa";
} elseif ($umur<=65){
    echo "Usia Anda tergolong Parubayah";
} else {
    echo "Usia anda tergolong sudah tua";
}


	?>