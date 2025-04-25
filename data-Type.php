<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Menyimpan nilai integer ke dalam variabel $x
$x = 5;
// Menampilkan tipe data dan nilai dari $x
var_dump($x);

// Mengubah nilai $x menjadi string
$x = "Hello world!";
// $y juga string, tetapi menggunakan single quotes
$y = 'Hello world!';

// Menampilkan tipe data dan nilai dari $x dan $y
var_dump($x);
echo "<br>";
var_dump($y);

// Menyimpan nilai integer lain ke dalam $x
$x = 5985;
// Menampilkan tipe data dan nilai dari $x
var_dump($x);

// Membuat array yang berisi beberapa merek mobil
$cars = array("Volvo", "BMW", "Toyota");
// Menampilkan struktur dan isi array
var_dump($cars);

// Membuat class (kelas) bernama Car
class Car {
  public $color; // Properti warna
  public $model; // Properti model

  // Konstruktor untuk menginisialisasi properti
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  // Method yang mengembalikan string deskripsi mobil
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

// Membuat objek dari class Car
$myCar = new Car("red", "Volvo");
// Menampilkan tipe data dan struktur dari objek $myCar
var_dump($myCar);

// Mengubah integer menjadi string secara eksplisit (type casting)
$x = 5;
$x = (string) $x;
// Menampilkan tipe data dan nilai dari $x setelah casting
var_dump($x);

// Menetapkan kembali nilai integer ke $x
$x = 5;
var_dump($x);

// Menetapkan string ke $x
$x = "Hello";
var_dump($x);
?>

</body>
</html>
