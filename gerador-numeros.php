<?php

echo "Apresentar N números aleatorios entre 1 e 99. N não é conhecido à partida. Se o número gerado aleatoriamente pertencer ao intervalo de 10 a 30, então não serão gerados outros números. Deve apresentar a sequência de números gerados.";

echo "<br><br>";
$numero = rand(1, 99);
$contador = 0;
echo "Número gerado: $numero";
echo "<br>";
while ($numero < 10 || $numero > 30) {
    $numero = rand(1, 99);
    echo "Número gerado: $numero";
    echo "<br>";
    $contador++;
}
echo "Foram gerados $contador números.";


?>