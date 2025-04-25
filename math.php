<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Menampilkan nilai konstanta pi (π ≈ 3.1415926535898)
echo(pi()); 
echo "<br>";

// Menampilkan nilai terkecil dari daftar angka
echo(min(0, 150, 30, 20, -8, -200)); // Output: -200
echo "<br>";

// Menampilkan nilai terbesar dari daftar angka
echo(max(0, 150, 30, 20, -8, -200)); // Output: 150
echo "<br>";

// Mengembalikan nilai absolut (positif) dari angka -6.7
echo(abs(-6.7)); // Output: 6.7
echo "<br>";

// Membulatkan angka ke bilangan bulat terdekat
echo(round(0.60)); // Output: 1
echo "<br>";
echo(round(0.49)); // Output: 0
echo "<br>";

// Menghasilkan angka acak antara 10 dan 100
echo(rand(10, 100)); // Output: nilai acak antara 10 dan 100
?>

</body>
</html>
