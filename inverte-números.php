<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverter Números</title>
</head>
<body>
    <h1>Inverter Números</h1>
    <form method="post" action="">
        <label for="a">Número A:</label>
        <input type="number" id="a" name="a" required>
        <br>
        <label for="b">Número B:</label>
        <input type="number" id="b" name="b" required>
        <br>
        <input type="submit" value="Inverter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = '';

        echo "<p>Deve-se inverter o valor de a e b</p>";
        echo "<p>Os valores de a e b são: $a e $b</p>";

        $c = $a;
        $a = $b;
        $b = $c;

        echo "<p>Os novos valores de a e b são: $a e $b</p>";
    }
    ?>
</body>
</html>