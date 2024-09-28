<?php

echo "Dado um número inteiro positivo armazenado na variável n, mostre os seus divisores e diga quantos são.";

echo    "<br>";


$n = 100;
$divisores = 0;

echo "O numero utilizado é $n <br>";

for ($i = 1; $i <= $n; $i++) {
    if ($n % $i == 0) {
        echo $i . "<br>";
        $divisores++;
    
    }


}

echo "O número $n tem $divisores divisores.";

?>