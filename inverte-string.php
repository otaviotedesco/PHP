<?php
echo "Inverte String\n";
echo "<br>";   
echo "Desenvolver uma função que receba uma string e retorne a mesma string invertida.\n";

function tamanhoString($string){
    $stringTamanho = strlen($string);
    return $stringTamanho;
}


function inverteString2($string){
    $stringInvertida2 = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $stringInvertida2 .= $string[$i];
    }
    return $stringInvertida2;
}

echo "<br>";
echo tamanhoString("Ola, mundo!");

echo "<br>";
echo inverteString2("Ola, mundo!");

?>