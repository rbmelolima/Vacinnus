<?php

if (!function_exists("proteger")) {

    function proteger()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['cpf']) && !isset($_SESSION['senha'])) {
            header("Location: index.php");
        }
    }
}
