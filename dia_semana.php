<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Básica</title>
</head>
<body>

    <h1>Dias da Semana </h1>

    <form action="dias_da_semana.php" method="post">
        <label for="dia">Digite um dia:</label>
        <input type="number" name="dia_semana" id="dia_semana">
        <button type="submit">Verificar</button>
    </form>


    <?php

    $d1 = "Domingo";
    $d2 = "Segunda";
    $d3 = "Terça";
    $d4 = "Quarta";
    $d5 = "Quinta";
    $d6 = "Sexta";
    $d7 = "Sábado";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia_semana = $_POST["dia_semana"];


        switch ($dia_semana) {

            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda-feira";
                break;
            case 3:
                echo "Terça-feira";
                break;
            case 4:
                echo "Quarta-feira";
                break;
            case 5:
                echo "Quinta-feira";
                break;
            case 6:
                echo "Sexta-feira";
                break;
            case 7:
                echo "Sábado";
                break;
            default:
                echo "Dia inválido";

        }


    }


        ?>
</body>
</html>