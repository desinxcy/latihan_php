<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>

<?php
// 1. Inisialisasi variabel dan mencetak string
$x = 5;
$y = "John";
$txt = "W3Schools.com";

// 2. Interpolasi string (langsung tampilkan isi variabel dalam string)
echo "I love $txt!<br>";

// 3. Concatenation (menggabungkan string pakai titik `.`, seperti di JavaScript pakai `+`)
$txt = "W3Schools.com";
echo "I love " . $txt . "!<br>";

// 4. Operasi penjumlahan angka
$x = 5;
$y = 4;
echo $x + $y . "<br>"; // Output: 9

// 5. Menampilkan isi variabel
$x = 5;      // Integer
$y = "John"; // String
echo $x . "<br>"; // Output: 5
echo $y . "<br>"; // Output: John

// 6. var_dump = menampilkan tipe data dan isi variabel
$x = 5;
var_dump($x); echo "<br>";         // int(5)
var_dump(5); echo "<br>";          // int(5)
var_dump("John"); echo "<br>";     // string(4) "John"
var_dump(3.14); echo "<br>";       // float(3.14)
var_dump(true); echo "<br>";       // bool(true)
var_dump([2, 3, 56]); echo "<br>"; // array(3) { [0]=> int(2) ... }
var_dump(NULL); echo "<br>";       // NULL

// 7. Menampilkan string
$x = "John";
echo $x . "<br>"; // Output: John

// 8. Multiple assignment (semua variabel akan bernilai sama)
$x = $y = $z = "Fruit";
// Sekarang $x, $y, dan $z semuanya menyimpan "Fruit"
echo "$x, $y, $z"; // Output: Fruit, Fruit, Fruit
?>

</body>
</html>
