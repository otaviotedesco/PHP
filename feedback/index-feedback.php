<?php

$feedbackEnviado = "";
$feedbackErro = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);


    if (!empty($nome) && !empty($email) && !empty($mensagem)) {


        $arquivo = fopen("feedbacks.txt", "a");
        $conteudo = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem\n\n";
        fwrite($arquivo, $conteudo);
        fclose($arquivo);


        header("Location: index-feedback.php?success=1");
        exit();
    } else {

        header("Location: index-feedback.php?error=1");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Feedback</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Envie seu Feedback</h1>

        <!-- Exibe mensagens de sucesso ou erro -->
        <?php if (isset($_GET['success'])): ?>
            <div class="message success">Feedback enviado com sucesso!</div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="message error">Por favor, preencha todos os campos.</div>
        <?php endif; ?>

        <!-- Formulário -->
        <form method="POST" action="index-feedback.php">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Seu nome">

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" placeholder="Seu e-mail">

            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem..."></textarea>

            <button type="submit">Enviar Feedback</button>
        </form>

        <!-- Exibição -->
        <div class="feedbacks">
            <h2>Feedbacks Recebidos:</h2>
            <?php
            if (file_exists("feedbacks.txt")) {
                $conteudoFeedback = file_get_contents("feedbacks.txt");
                $feedbacks = explode("\n\n", trim($conteudoFeedback));

                foreach ($feedbacks as $feedback) {
                    if (!empty(trim($feedback))) {
                        echo '<div class="feedback"><p>' . nl2br($feedback) . '</p></div>';
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
