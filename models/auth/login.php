<?php
session_start();
require '../BD/connect.php';

$email = $_POST['email'];
$password = $_POST['senha'];

$sql_lesse = "select * from locatario where email='" . $email . "' and senha='" . $password . "'";
$res_lesse = pg_query($conexao, $sql_lesse);
$record_lesse = pg_num_rows($res_lesse);

$sql_lessor = "select * from locador where email='" . $email . "' and senha='" . $password . "'";
$res_lessor = pg_query($conexao, $sql_lessor);
$record_lessor = pg_num_rows($res_lessor);

if ($record_lesse == 1) {
    $row = pg_fetch_row($res_lesse);
    $_SESSION["id_usuario"] = $row[0];
    $_SESSION["email"] = $row[3];
    $_SESSION["senha"] = $row[5];

    header("Location: ../../views/pages/lesse.php");
}
if ($record_lessor == 1) {
    $row = pg_fetch_row($res_lessor);
    $_SESSION["id_usuario"] = $row[0];
    $_SESSION["email"] = $row[3];
    $_SESSION["senha"] = $row[5];

    header("Location: ../../views/pages/lessor.php");
}
 else {
    echo "Credenciais inválidas. <a href='index.php'>Tente novamente</a>";
}
?>
