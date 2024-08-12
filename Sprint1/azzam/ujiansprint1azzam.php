<?php
$var1 = "satu";
$var2 = "dua";
$var3 = "tiga";
$var4 = "empat";
?>
<br>
<?php
$x = 50;
$y = 30; 
var_dump($x > 50 && $x % 2 == 0);
var_dump($x < 50 || $x % 2 == 0);
var_dump($y = 30 && $y % 2 == 0);
var_dump($y > 30 || $y % 2 == 1);
echo "<br>";


echo $x + $y;
echo "<br>";
$x = 50;
$x += 30;
echo $x;
echo "<br>";
$y = 30;
$y += 10;
echo $y;
echo "<br>";

var_dump($x != 50);
var_dump($y .= 40);
?>