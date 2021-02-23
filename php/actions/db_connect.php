<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "loja-full-pet";

$connect = mysqli_connect($host, $usuario, $senha, $bd);

if (mysqli_connect_errno())
{
    echo "Falha na conexão MySQL:".mysqli_connect_errno();
}

?>
