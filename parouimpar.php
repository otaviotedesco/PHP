<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Básica</title>
</head>
<body>

    <h1>Teste de par ou ímpar </h1>


    <form action="parimpar.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if (is_numeric($numero)) {
            if ($numero % 2 == 0) {
                echo "O número $numero é par";
            } else {
                echo "O número $numero é ímpar";
            }

    }}


        ?>
</body>
</html>