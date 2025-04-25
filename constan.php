<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Mendefinisikan konstanta GREETING
define("GREETING", "Welcome to W3Schools.com!");

// Menampilkan isi dari konstanta GREETING
echo GREETING . "<br>";

// Mendefinisikan konstanta array cars
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);

// Menampilkan elemen pertama dari array cars
echo cars[0] . "<br>";

// Fungsi untuk menampilkan konstanta GREETING
function myTest() {
  echo GREETING;
}

// Memanggil fungsi
myTest();
?>
</body>
</html>
