<?php
// Configurações de acesso
$servername = "postgres";
$username = "postgres";
$password = "senha_exemplar_postgres";
$database = "db_postgres_exemplo";
$port = "5432";

$con_string = "host={$servername} port={$port} dbname={$database} user={$username} password={$password}";
$conn = pg_connect($con_string) || die('Erro de conexão ao Postgres');
?>