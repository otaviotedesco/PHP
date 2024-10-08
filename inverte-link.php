<?php
//Criar uma função que inverte o link

$link = "tp.bpi.www";

function inverte($link)

{
    return strrev($link);
}

echo inverte($link);

echo '<br>';
echo strrev("Ola Mundo!");

?>
