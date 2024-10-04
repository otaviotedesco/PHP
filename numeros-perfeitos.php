<?php

function numerosperfeitos($n){

    $soma = 0;
    for($i = 1; $i < $n; $i++){
        if($n % $i == 0){
            $soma += $i;
        }
        echo $soma;
    }
}

numerosperfeitos(3);

?>