<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Menyimpan string "John" ke dalam variabel $x
$x = "John";
// Menampilkan string yang menggabungkan "Hello" dan isi dari $x
echo "Hello $x";

// Menyimpan string ke dalam variabel $x
$x = "Hello World!";
// Mengubah semua huruf pada $x menjadi huruf kapital
echo strtoupper($x);

// Menyimpan string ke dalam $x
$x = "Hello World!";
// Menggunakan explode() untuk memecah string menjadi array berdasarkan spasi
$y = explode(" ", $x);

// Menampilkan isi array menggunakan print_r()
print_r($y);

// Menggabungkan dua string menjadi satu string dengan spasi di antaranya
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;

// Mengambil substring dari $x mulai dari index ke-6 sebanyak 5 karakter
$x = "Hello World!";
echo substr($x, 6, 5);
?>

</body>
</html>
