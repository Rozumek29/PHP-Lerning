<?php

//Dane do operacji.
$a = 5;
$b = 7;

//Operacja do wykonania.

$operacja = "dodawanie";

switch ($operacja){
    case "dodawanie":
        echo $a + $b;
        break;
    case "odejmowanie":
        echo $a - $b;
        break;
    case "mnożenie":
        echo $a * $b;
        break;
    case "dzielenie":
        echo $a / $b;
        break;
}

