<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// echo bisa pakai kurung atau tanpa kurung
echo "Hello<br>";          // tanpa kurung
echo("Hello<br>");         // dengan kurung

// Mengabungkan tag php dan html
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";

// echo bisa punya banyak parameter, dipisahkan dengan koma
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

//  variabel langsung diproses di dalam tanda kutip ganda
echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

// menggabungkan string pakai titik (.)
echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';


// Sama seperti echo, bisa pakai kurung atau nggak
print "Hello<br>";
print("Hello<br>");

// Print juga bisa digunakan untuk menampilkan HTML dan variabel
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!<br>";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";

?>

</body>
</html>
