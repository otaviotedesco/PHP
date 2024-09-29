<?php

echo "Dado um número inteiro armazenado na variável n, mostre o número de algarismos que compõem esse número.";



$n = rand(1, 100000);


echo "<br>";

echo "O número utilizado é $n <br>";

echo "O número $n tem " . strlen($n) . " algarismos.";


echo "<br>";

?>