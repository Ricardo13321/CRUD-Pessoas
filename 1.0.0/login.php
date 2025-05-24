<?php
    session_start();
    $email = $_POST["email"] ?? '';
    $senha = $_POST["senha"] ?? '';
    $emails = json_decode(file_get_contents('email.json'), true);
    $senhas = json_decode(file_get_contents('senha.json'), true);
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