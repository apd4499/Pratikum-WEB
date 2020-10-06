<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Nested IF</title>
</head>

<body>
    <h1> Contoh Program Menggunakan Nested IF ( IF Bersarang )</h1>
    <?php
    $nasi_goreng = 12000;
    $nasi_uduk = 7000;
    $nasi_kuning = 15000;
    $uang_jono = 20000;
    $uang_joni = 10000;

    if ($uang_jono >= $nasi_goreng) {
        echo ' Anda Sekarang Membeli Nasi Goreng ';
    } else if ($uang_joni >= $nasi_kuning) {
        echo ' Anda Sekarang Membeli Nasi Kuning';
        if ($uang_jono >= $nasi_uduk) {
            echo ' Anda membeli nasi Uduk ';
        }
    } else {
        echo 'Uang Tidak Cukup ';
    }
    ?>
</body>

</html>