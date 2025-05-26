<?php session_start();?>
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
    <title>STATUS</title>
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
    <nav>
        &nbsp;&nbsp;
        <a href="inicial.php">HOME</a>
        <div class="user">
            <a href="sair.php">SAIR</a>
        </div>
        <hr>
    </nav>
    
    <div class="row justify-content-center row-cols-1 row-cols-md-3">
        <div class="cols">
            <div class="card mb-4 rounded shadow-sw">
                <div class="card-header py-3 text-center">
                    <strong><h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-hdd-fill" viewBox="0 0 16 16">
  <path d="M0 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1M.91 7.204A3 3 0 0 1 2 7h12c.384 0 .752.072 1.09.204l-1.867-3.422A1.5 1.5 0 0 0 11.906 3H4.094a1.5 1.5 0 0 0-1.317.782z"/>
</svg>
                    &nbsp;&nbsp;STATUS DA SESSÃO</h3></strong>
                </div>
                <div class="card-body">
                    <pre>
                        <?php print_r($_SESSION); ?>
                   </pre>
                </div>
            </div>
        </div>
    </div>
</body>
</html>