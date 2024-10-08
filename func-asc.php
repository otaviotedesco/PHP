<?php

//Desenvolver uma função que receba como argumento uma string e faça sua codificação utilizando o seguinte método: Cada elemento da string é substituído pelo caracter seguinte, caso seu código ASCII seja par, ou pelo caracter anterior caso seu código seja ímpar.



function codificarString($str) {
    $resultado = '';


    for ($i = 0; $i < strlen($str); $i++) {
        $codigoAscii = ord($str[$i]);
        if ($codigoAscii % 2 == 0) {
            $resultado .= chr($codigoAscii + 1);
        } else {
            $resultado .= chr($codigoAscii - 1);
        }
    }
    return $resultado;
}


$stringOriginal = "teste";


$stringCodificada = codificarString($stringOriginal);


echo "String original: " . $stringOriginal;
echo '<br>';
echo "String codificada: " . $stringCodificada;


?>