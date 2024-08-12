<?php
echo " no 1";
$a = "aku syauqie"; //string
$b = 123; //integer
$c = ["syauqie", "radhit"]; //array
$d = false; //boolean
echo "<br>";
$e = false; 
$f = true; //outputnya true  

echo "<br>";

echo " no 2";
echo "<br>";
var_dump ($f && $e); // menghasilkan false karena salah satunya false
echo "<br>"; 
var_dump ($f || $e); //menghasikan true
echo "<br>";
var_dump (!$f); //akan membalikkan fakta atau menghasilkan false
echo "<br>";
var_dump ($e xor $f); //akan menghasilkan true karena berbeda  
echo "<br>";
echo "<br>";

echo " no 3";
echo "<br>";
$a = 10; 
$b = 5;

$c = $a + $b;
echo $c;  //aritmatika
echo "<br>";
$a *= $b; //assignment
echo $a;

echo "<br>";
echo " no 4";
echo "<br>";
var_dump ($a > $b);echo "<br>";  //akan menghasilkan true
var_dump ($a === $b); //false karena berbeda isi
echo "<br>";

echo " no 5";
echo "<br>";
$namadepan = "syauqie";
$namabelakang = "billah";
echo $namadepan ." " .$namabelakang;echo "<br>"; echo "concat dalam bahasa disebut penggabungan string caranya ialah dengan menggunakan titik diantara 2 variable tersebut  
"
?>