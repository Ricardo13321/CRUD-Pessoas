<?php
    session_start();
    $email = $_POST["email"] ?? '';
    $senha = $_POST["senha"] ?? '';
    $emails = $_SESSION['emails'];
    $senhas = $_SESSION['senhas'];
    $indice = array_search($email, $emails);

    if($indice !== false && isset($senhas[$indice]) && $senha === $senhas[$indice]){
        $_SESSION['usuario'] = $email;
        header("Location: inicial.php");
    }
    else{
        echo"<script>alert('Credenciais não validadas. Tente novametne!');</script>";
        echo"<script>window.location.replace('index.php');</script>";  
    }
?>