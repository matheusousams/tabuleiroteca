<?php
// Configurações de acesso
$servername = "postgres";
$username = "postgres";
$password = "senha_exemplar_postgres";
$database = "db_postgres_exemplo";
$port = "5432";

try {
    $pdo = new PDO("pgsql:host=$servername; port=$port; dbname=$database; user=$username; password=$password", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $conexao = pg_connect("host=$servername dbname=$database user=$username password=$password");
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}


?>