<?php
function gerarchave() {
    $key = [];
    while (count($key) < 6) {
        $number = rand(1, 50);
        if (!in_array($number, $key)) {
            $key[] = $number;
        }
    }
    return $key;
}

$chavetotoloto = gerarchave();
echo "Chave do Totoloto: " . implode(", ", $chavetotoloto);
?>