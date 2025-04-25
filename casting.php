<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Deklarasi variabel dengan tipe data berbeda
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

// Mengubah semua variabel menjadi string menggunakan type casting
$a = (string) $a; // "5"
$b = (string) $b; // "5.34"
$c = (string) $c; // "hello"
$d = (string) $d; // "1" (true akan dikonversi ke "1")
$e = (string) $e; // "" (NULL jadi string kosong)

// Menampilkan tipe data dan nilai dari setiap variabel setelah dikonversi ke string
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

// Membuat class Car dengan constructor dan method message()
class Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

// Membuat objek dari class Car
$myCar = new Car("red", "Volvo");

// Mengubah objek menjadi array menggunakan casting
$myCar = (array) $myCar;
// Menampilkan struktur array hasil dari objek
var_dump($myCar);

// Deklarasi ulang variabel dengan tipe awal yang berbeda
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

// Mengubah semua variabel menjadi objek (stdClass object)
$a = (object) $a; // object(stdClass)# -> dengan properti scalar
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e; // menjadi objek kosong stdClass jika dari NULL

// Note: Karena bagian ini tidak ada var_dump(), hasilnya tidak ditampilkan.
// Kamu bisa menambahkan `var_dump($a);` dan seterusnya jika ingin lihat isi objek.
?>

</body>
</html>
