<?php


$frutas = array("Maçã", "Banana", "Laranja", "Manga", "Uva");

echo "<h2>Lista de Frutas</h2>";
echo "<ol>";


foreach ($frutas as $fruta) {
    echo "<li>" . $fruta . "</li>";
}

echo "</ol>";
?>
