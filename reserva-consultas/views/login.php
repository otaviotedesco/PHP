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

        // Initialize the PDO object
        $dsn = 'pgsql:host=localhost;dbname=sistema_reserva';
        $db_user = 'postgres';
        $db_password = 'j23.049';
        try {
            $pdo = new PDO($dsn, $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }

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