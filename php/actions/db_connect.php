<?php

$host = getenv("DB_HOST") ?: "db";
$usuario = getenv("DB_USER") ?: "root";
$senha = getenv("DB_PASS") ?: "root";
$bd = getenv("DB_NAME") ?: "loja-full-pet";

$connect = mysqli_connect($host, $usuario, $senha, $bd);

if (mysqli_connect_errno())
{
    echo "Falha na conexão MySQL: " . mysqli_connect_error();
}

?>
