<?php 
    session_start();
    if(!isset($_SESSION['usuario'])) {header('Location: index.php');}
    $index = $_GET['pos'];
    $emails = $_SESSION['emails'];
    $id = array_search($_SESSION['usuario'], $emails);
    if ($index == $id) {
       echo "<script language='javascript' type='text/javascript'>alert('Não é possível excluir o usuário referente a sessão atual!');window.location.href='listagem.php'</script>";
    } else {
        unset($_SESSION['nomes'][$index]);
        unset($_SESSION['emails'][$index]);
        unset($_SESSION['senhas'][$index]);
        unset($_SESSION['generos'][$index]);
        $_SESSION['nomes'] = array_values($_SESSION['nomes']);
        $_SESSION['emails'] = array_values($_SESSION['emails']);
        $_SESSION['generos'] = array_values($_SESSION['generos']);
        $_SESSION['senhas'] = array_values($_SESSION['senhas']);
        header("Location: listagem.php");
    }
    
?>