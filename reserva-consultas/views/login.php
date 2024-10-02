<!-- views/login.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once 'C:\xampp\htdocs\reserva-consultas\includes\auth.php';
        include_once 'C:\xampp\htdocs\reserva-consultas\includes\db.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Pass the PDO object to the login function
        if (login($username, $password, $pdo)) {
            header('Location: dashboard.php');
            exit();
        } else {
            echo 'Invalid username or password.';
        }
    }
    ?>
</body>
</html>
