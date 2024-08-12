<?php
$a = 20; // integer
$b = 2.345; // float (doble)
$c = "deandra"; // string
$d = "true and false"; // boolean

var_dump (1 < "5"); // hasil nilai true
var_dump (5 < "1"); // hasil nilai false

$x = 20;
var_dump ( $x < 30 && $x % 2 == 0); // hasil nilai true 
var_dump ( $x < 10 && $x % 5 == 0); // hasil nilai false

var_dump ( $x < 50 || $x % 2 == 2); // hasil nilai true
var_dump ( $x < 5 || $x % 5 == 4); // hasil nilai false






?>