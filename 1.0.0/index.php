<?php
session_start();
if(array_key_exists('usuario',$_SESSION)) {
    header('Location: inicial.php');
}
?>
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
</head>
<style>
    body{
        background-color: rgb(100, 0, 131);
        color:rgb(255, 255, 255);
    }

    .card-header {
        color:rgb(100, 0, 131);
    }

    .btn-purple {
            background: rgb(207, 48, 255);
            color: whitesmoke;
    }
    .btn-purple:hover {
            background: rgb(100, 0, 131);
            color: rgb(148, 148, 148);
    }
</style>
<body>
    <center><h2><b>PHP/ Array</h2></b></h2></center>
    <hr><br><br>
    <div class="row justify-content-center row-cols-1 row-cols-md-3 text-center">
        <div class="cols">
            <div class="card mb-4 rounded shadow-sw">
                <div class="card-header py-3">
                    <strong><h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="purple" class="bi bi-airplane" viewBox="0 0 16 16">
                    <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849m.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1s-.458.158-.678.599"/>
                    </svg>
                    &nbsp;&nbsp;LOGIN</h3></strong>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post" class="text-start">
                        <label class="form-label">E-MAIL</label>
                        <input class="form-control" type="email" name="email" required placeholder="Digite o seu e-mail" autofocus/>
                        <br>
                        <label class="form-label">SENHA</label>
                        <input class="form-control" type="password" name="senha" required placeholder="Digite sua senha"/>
                        <br>
                        <input class="btn btn-purple" type="submit" value="ENTRAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>