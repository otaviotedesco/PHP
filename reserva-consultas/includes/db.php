<?php

$host = 'localhost';
$port = '5432';
$dbname = 'sistema_reserva';
$user = 'postgres';
$password = 'j23.049';


$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");


if (!$conn) {
    die("Erro na conexão: " . pg_last_error());
}

function closeConnection($conn) {
    pg_close($conn);
}
?>
