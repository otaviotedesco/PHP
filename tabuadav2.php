<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Básica</title>
</head>
<body>

    <h1>Tabuada </h1>


    <form action="tabuada.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero">
        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        for ($i = 1; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . $numero * $i . "<br>";
        }
    }


        ?>
</body>
</html>