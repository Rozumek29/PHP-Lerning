<?php
$number = 1;
$text = "Hello World";
define('PI', 3.14159265359);

$x = $number;

echo "To jest zmienna -> $number" . "<br>";
echo '$text' . "<br>";
echo $text . " ". $x . "<br>";
echo "Liczba PI to +/- " . PI . "<br>";

echo round(PI, 0) ."<br>";
echo round(PI, 2) ."<br>";
echo round(PI, 4) ."<br>";

$wynik = `dir /B` . "<br>";

echo $wynik;

$a = 5;
$a++;
echo $a . "<br>";

$p = 5;
$h = 7;

$pole = $p*$h;
$obwod = (2*$p)+(2*$h);
echo "Pole prostokąta o bokach $p i $h wynosi $pole a obwód wynosi $obwod" . "<br>";

$dochod = 5000;

define('W_POD', 436.20);
define('pod', 0.19);

$wynik = ($dochod - W_POD) * pod;

echo $wynik;


?>