<?php 
session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$idSession;
$id = $_GET['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome  = $_POST['nome'];
$genero = $_POST['genero'];
if(empty($id) || empty($email) || empty($senha) || empty($nome) || empty($genero)) {
    header('Location:inicial.php');
    exit;
}

$existe = false;
foreach ($_SESSION['emails'] as $key => $value) {
    if($value == $email && $key != $id) {
        $existe = true;
        break;
    }

    if($value == $_SESSION['usuario']) {
        $idSession = $key;
    }
}

if ($existe) {
    echo "<script language='javascript' type='text/javascript'>alert('Não é possível mudar o email porque o email $email já consta na nossa base de dados!');window.location.href='listagem.php'</script>";
} else {
    $_SESSION['emails'][$id] = $email;
    $_SESSION['senhas'][$id] = $senha;
    $_SESSION['nomes'][$id] = $nome;
    $_SESSION['generos'][$id] = $genero;
    $_SESSION['usuario'] = ($idSession == $id)?$email : $_SESSION['usuario'];
    header('Location:listagem.php');
}
?>