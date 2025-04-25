<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Mendeklarasikan variabel dengan tipe data berbeda
$a = 5;       // Integer
$b = 5.34;    // Float (bilangan desimal)
$c = "25";    // String (angka tapi dalam bentuk teks)

// Menampilkan tipe data dan nilai masing-masing variabel
var_dump($a);  // Output: int(5)
var_dump($b);  // Output: float(5.34)
var_dump($c);  // Output: string(2) "25"

// Mengecek apakah $x bertipe integer
$x = 5985;
var_dump(is_int($x)); // true karena $x adalah integer

// Mengecek apakah $x bertipe integer
$x = 59.85;
var_dump(is_int($x)); // false karena $x adalah float

// Mengecek apakah $x bertipe float
$x = 10.365;
var_dump(is_float($x)); // true

// Mengecek apakah $x adalah numeric (angka atau string angka)
$x = 5985;
var_dump(is_numeric($x)); // true

// String angka juga dianggap numeric
$x = "5985";
var_dump(is_numeric($x)); // true

// Operasi matematika antara string angka dan angka akan otomatis dikonversi
$x = "59.85" + 100;
var_dump(is_numeric($x)); // true karena hasilnya adalah angka

// String non-numeric
$x = "Hello";
var_dump(is_numeric($x)); // false karena ini bukan angka dan tidak bisa dikonversi
?>

</body>
</html>
