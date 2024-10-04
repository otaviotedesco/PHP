<?php

echo "Calcule as raízes, fórmula de báskara\n";
echo "<br>";

function baskara($a, $b, $c)
{
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        echo "Não existem raízes reais.";
    } elseif ($delta == 0) {
        $x1 = -$b / (2 * $a);
        echo "x = " . $x1;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "x1 = " . intval($x1);
        echo "<br>";
        echo "x2 = " . intval($x2);
    }
}


baskara(8, 7, -8);

?>
