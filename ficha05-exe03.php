<?php

$cavalos = [
    ["nome" => "Cavalo 1", "tempo" => 120],
    ["nome" => "Cavalo 2", "tempo" => 115],
    ["nome" => "Cavalo 3", "tempo" => 130],
    ["nome" => "Cavalo 4", "tempo" => 110],
    ["nome" => "Cavalo 5", "tempo" => 125],
    ["nome" => "Cavalo 6", "tempo" => 118],
    ["nome" => "Cavalo 7", "tempo" => 122],
    ["nome" => "Cavalo 8", "tempo" => 119],
    ["nome" => "Cavalo 9", "tempo" => 117],
    ["nome" => "Cavalo 10", "tempo" => 121],
];


$vencedor = $cavalos[0];
foreach ($cavalos as $cavalo) {
    if ($cavalo["tempo"] < $vencedor["tempo"]) {
        $vencedor = $cavalo;
    }
}


echo "O vencedor é " . $vencedor["nome"] . " com um tempo de " . $vencedor["tempo"] . " segundos.";
?>