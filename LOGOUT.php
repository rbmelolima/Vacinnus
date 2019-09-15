<?php
session_start();
if ($_SESSION['cpf'] != null || (!empty($_SESSION['cpf']))) {
    $_SESSION = array();
    session_destroy();
    header("Location: INDEX.php");
}
