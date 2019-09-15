<?php
if (!isset($_SESSION)) {
    session_start();
}

$servidor = "localhost";
$bancodedados = "vaccinus";
$user = "root";
$palavrapasse = "";

$conn = mysqli_connect($servidor, $user, $palavrapasse, $bancodedados);

if (!$conn) {
    die("<h1> Erro de conexão </h1>");
}
