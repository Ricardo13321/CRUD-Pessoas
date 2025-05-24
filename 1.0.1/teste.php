<?php 
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: index.php');
        exit;
    }
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
    } else {
        $nomes = $_SESSION['nomes'];
        $emails = $_SESSION['emails'];
        $id = array_search($_SESSION['usuario'], $emails);
    }
?>
<!-- link para os botões customizados https://uiverse.io/buttons?page=1-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Ajuda o navegador a entender que a linguagem do site é pt-br -->
    <meta http-equiv="content-language" content="pt-br">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>PHP / Array</title>
    <link rel="shortcut icon" type="image/jpg" href="/favicon.jpg"/>
</head>
<style>
    body{
        background-color: rgb(100, 0, 131);
        color:rgb(255, 255, 255);
        cursor: auto;
    }

    .card-header {
        color:rgb(100, 0, 131);
    }

    .btn-purple {
            background: rgb(207, 48, 255);
            color: whitesmoke;
    }
    .btn-purple:hover {
            border: 1px solid rgb(207, 48, 255);
            background: rgb(100, 0, 131);
    }

    nav a {
        color: white;
        text-decoration: none;
    }

    .user {
        float: right;
        margin-right: 10px;
    }

</style>
<body class="fundobonitinho">
    <center><h2><b>PHP/ Array</h2></b></h2></center>
    <hr>
    <nav>
        &nbsp;&nbsp;
        <a href="inicial.php">HOME |</a>
        <a href="listagem.php">LISTAGEM |</a>
        <a href="gravar.php">SALVAR DADOS</a>
        <div class="user">
                <?php echo $nomes[$id] ?> | <a href="sair.php">SAIR</a>
        </div>
    </nav>
    <br><br>
    <center><button type="button" class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>CADASTRAR NOVO USUÁRIO</b></button></center>
    <br><br>
    <div class="row justify-content-center row-cols-1 row-cols-md-3 text-center">
        <div class="cols">
            <div class="card mb-4 rounded shadow-sw">
                <div class="card-header py-3">
                    <strong><h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="purple" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
                    &nbsp;&nbsp;DEBUG</h3></strong>
                </div>
                <div class="card-body">
                   <?php print_r($_SESSION); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>