<?php
session_start();
if (!isset($_SESSION['nomes'])) {
    $emails = json_decode(file_get_contents('email.json'), true);
    $senhas = json_decode(file_get_contents('senha.json'), true);
    $nomes = json_decode(file_get_contents('nome.json'), true);
    $generos = json_decode(file_get_contents('genero.json'), true);
    $id = array_search($_SESSION['usuario'], $emails);
    $_SESSION['nomes'] = $nomes;
    $_SESSION['emails'] = $emails;
    $_SESSION['generos'] = $generos;
    $_SESSION['senhas'] = $senhas;
}
header('Location: login.php');
?>