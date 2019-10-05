<?php
if (!isset($_SESSION)) {
    session_start();
}

$servidor = "localhost";
$bancodedados = "vacinnus";
$user = "root";
$palavrapasse = "";

$conn = mysqli_connect($servidor, $user, $palavrapasse, $bancodedados);

if (!$conn) {
    die("<div class=\"alert alert-danger\" role=\"alert\"> Erro de conexão </div>");
}
