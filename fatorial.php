<?php

echo "Dado um número armazenado na variávl n, apresente seu fatorial";
echo "<br>";

$n = 5;
$factorial = 1;

for ($i = $n; $i > 1; $i--) {
  $factorial = $factorial*$i;
}

echo $factorial;
echo "<br>";

?>