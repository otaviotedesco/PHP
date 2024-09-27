<?php

$x = 10;
function soma(){
global $x;

$y = 20;

$z = $x + $y;
return $z;



}


echo soma();
?>