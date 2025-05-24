<?php 
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: index.php');
        exit;
    }
    if(!isset($_SESSION['usuario'])) {header('Location: index.php');}
    $nomes = $_SESSION['nomes'];
    $emails = $_SESSION['emails'];
    $id = array_search($_SESSION['usuario'], $emails); 
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
            font-style: none;
            color: white;
    }

    .btn-purple:active {
        border: 1px solid rgb(207, 48, 255);
        background: rgb(67, 1, 87);
        font-style: none;
        color: white;
    }

    nav a {
        color: white;
        text-decoration: none;
    }

    .user {
        float: right;
        margin-right: 10px;
    }

/* From Uiverse.io by Peary74 */ 
.del {
  position: relative;
  top: 0;
  left: 0;
  width: 160px;
  height: 50px;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.del div {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: none;
  box-shadow: 4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .5), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 30px;
  letter-spacing: 1px;
  color: #ff0000;
  z-index: 1;
  transition: .6s;
}

.del:hover div {
  letter-spacing: 4px;
  color: #fff;
  background: #ff0000;
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
    <div class="row justify-content-center row-cols-1 row-cols-md-2 text-center">
        <div class="cols">
            <div class="card mb-4 rounded shadow-sw">
                <div class="card-header py-3">
                    <strong><h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="purple" class="bi bi-hdd" viewBox="0 0 16 16">
  <path d="M4.5 11a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1M3 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
  <path d="M16 11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V9.51c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198zM3.655 4.26 1.592 8.043Q1.79 8 2 8h12q.21 0 .408.042L12.345 4.26a.5.5 0 0 0-.439-.26H4.094a.5.5 0 0 0-.44.26zM1 10v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
</svg>
                    &nbsp;&nbsp;SALVAMENTO DE DADOS</h3></strong>
                </div>
                <div class="card-body">
                    <?php
                    $porc = 0;
                    $dados = $_SESSION['nomes'];
                    $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
                    file_put_contents('nome.json', $conteudo);
                    $porc = 25;
                    $dados = $_SESSION['emails'];
                    $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
                    file_put_contents('email.json', $conteudo);
                    $porc = 50;
                    $dados = $_SESSION['generos'];
                    $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
                    file_put_contents('genero.json', $conteudo);
                    $porc = 75;
                    $dados = $_SESSION['senhas'];
                    $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
                    file_put_contents('senha.json', $conteudo);
                    $porc = 100;
                    echo "<div class='progress'  role='progressbar' aria-label='Animated striped' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100'>
                    <div class='progress-bar progress-bar-striped progress-bar-animated bg-danger' style='width: $porc%'>$porc%</div>
                    </div>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>