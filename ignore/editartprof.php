<?php
session_start();
if($_SESSION["REQUEST_METHOD"] === 'POST'){ 
    $id = $_POST['id'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $_SESSION['nomes'][$id] = $nome;
    $_SESSION['email'][$id] = $email;
    $_SESSION['senha'][$id] = $senha;
    $_SESSION['genero'][$id] = $genero;
    header("Location: listagem.php");
}
?>