<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página HTML</title>
</head>
<body>

<?php
$nome = "João";
$idade = 25;

$refrigerantes = array('Coca-Cola', 'Pepsi', 'Guaraná', 'Fanta', 'Sukita', 'Sprite');
date_default_timezone_set('Europe/Lisbon');
$data = date('d/m/y H:i:s');

?>
    <header>
                <h1>Bem-vindo à Minha Página</h1>
    </header>
    <main>

        <p>Olá, <?php echo $nome; ?>! Você tem <?php echo $idade; ?> anos.</p>
        <p>Alguns refrigerantes que eu gosto são:</p>
       
       <?php
    
        for ($i = 0; $i < count($refrigerantes); $i++) {
            echo "<p>" . $refrigerantes[$i] . "</p>";}
         ?>

<p> A data de hoje é: <?php echo $data; ?>.</p>
        <p>Esta é uma página HTML de exemplo.</p>
    </main>
    <footer>
        <p>&copy; 2023 Minha Página</p>
    </footer>
</body>
</html>