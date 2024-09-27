<?php

$j = 0;
$k = 0;

echo "Escrever os números pares de 0 a 100";

echo "<br>";

for ($i=0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}



do{
    echo $j . "<br>";
    $j++;
} while ($j <= 100);

while ($k <= 100) {
    echo $k . "<br>";
    $k++;
}

?>