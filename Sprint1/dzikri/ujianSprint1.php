<?php
// soal pertama

// 1. integer
echo"Integer";
echo"<br>";
$x = 10;
echo $x;

echo"<br>";

// 2. float (double)
echo "float";
echo"<br>";
$x = "51,00";
var_dump($x);

echo "<br>";

// 3.bolean 
echo"boolean";
echo"<br>";
$x = 10;
$y = 20;
$hasil = $x < $y;
var_dump ($hasil) ;

// soal kedua

echo "<br>";
$x = 10;
$y = 20;
$hasil = $x < $y && $x %2 ==0 ;
echo "<br>";
echo "hasil operator &&";
 var_dump ($hasil);

echo "<br>";
$x = 10;
$y = 20;
$hasil = $x > 10 || $y %5 ==0;
echo "<br>";
echo "hasil operator || ";
    var_dump($hasil);

echo "<br>";
$x = 10;
$y = 20;
$hasil =$x < 20 .! $x %2 ==0;
echo "<br>";
echo "hasil operator not !";
    var_dump($hasil);

echo "<br>";
$x = 10;
$y = 20;
$hasil = $x < $y xor $x %2 ==0;
echo "<br>";
echo "hasil operator xor";
    var_dump($hasil);

echo"<br>";
// 4.string
echo"string";
$nama = "dzikri";
var_dump($nama) ;
echo"<br>";
echo $nama;

// soal ke tiga
echo"<br>";
echo"aritmatika ";
echo"<br>";
$x = 5;
$y = 5;
$hasil = 5+5;
// penjumlahan
echo"hasil";
echo" ";
echo $hasil;

echo "<br>";
// pengurangan
echo"hasil";
echo" ";
echo $x - $y ;

echo"<br>";
// pembagian
echo"hasil";
echo" ";
echo $x / $y;

echo"<br>";
// sisa bagi /modulus
echo"hasil";
echo" ";
echo $x % $y;

echo ""

// concat

$nama_depan = dzikri;
$nama_belakang = rabbani;
$hasil = $nama_depan."".$nama_belakang;
echo $hasil;
?>