<?php

$array = [3, -1, 7, -5, 2, -8, 4];


$min = min($array);


$media = array_sum($array) / count($array);


$sumPositivos = array_sum(array_filter($array, function($num) {
    return $num > 0;
}));


$sumNegativos = array_sum(array_filter($array, function($num) {
    return $num < 0;
}));


echo "Menor elemento: $min";
echo '<br>';
echo "Média do vetor: $media";
echo '<br>';
echo "Somatório dos números positivos: $sumPositivos";
echo '<br>';
echo "Somatório dos números negativos: $sumNegativos";
?>