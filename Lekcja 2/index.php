<?php

echo "<h2>Pętla for:</h2>";

for ($i = 0; $i <= 10; $i++){
    echo $i . "<br>";
}

echo "<h2>Pętla While:</h2>";

$x = 0;
while ($x <= 10){
    echo $x . "<br>";
    $x++;
}

echo "<h2>Pętla doWhile:</h2>";

$y = 0;

do{
    if ($y==0){
        echo "<b> $y </b>" . "<br>";
        $y++;
        continue;
    }
    echo $y . "<br>";
    $y++;
}while($y <= 10);
