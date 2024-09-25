<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Básica</title>
</head>
<body>

    <h1>Teste de ano bissexto </h1>


    <form action="ano_bissexto.php" method="post">
        <label for="ano">Digite um Ano:</label>
        <input type="number" name="ano" id="ano">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano = $_POST["ano"];

        if (is_numeric($ano)) {
            if ($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0) {
                echo "O ano $ano é bissexto";
            } else {
                echo "O ano $ano não é bissexto";
            }

    }}


        ?>
</body>
</html>