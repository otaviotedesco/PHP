<!-- views/dashboard.php -->
<?php
include '../includes/auth.php';
if (!isLoggedIn()) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Bem-vindo ao Sistema de Reserva de Consultas</h2>
    <a href="calendar.php">Ver Calendário</a>
    <a href="../includes/auth.php?logout">Sair</a>
</body>
</html>
