<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$conteudo_emails = json_encode($_SESSION['emails'],JSON_PRETTY_PRINT);
$conteudo_senhas = json_encode($_SESSION['senhas'], JSON_PRETTY_PRINT);
$conteudo_nomes = json_encode($_SESSION['nomes' ],JSON_PRETTY_PRINT);
$conteudo_generos = json_encode($_SESSION['generos'],JSON_PRETTY_PRINT);

file_put_contents('email.json', $conteudo_emails);
file_put_contents('senha.json', $conteudo_senhas);
file_put_contents('genero.json', $conteudo_generos);
file_put_contents('nome.json', $conteudo_nomes);
if (array_key_exists('HTTP_REFERER',$_SERVER)) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
} else {
    header('Location: inicial.php');
}
?>