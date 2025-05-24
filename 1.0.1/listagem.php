<?php 
    session_start();
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
        visibility: none;
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
    <center>
        <form><input type="search" name="pesquisar"></form>
    </center>
    <br><br>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 text-center">
        <div class="cols">
            <div class="card mb-4 rounded shadow-sw">
                <div class="card-header py-3">
                    <strong><h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="purple" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
                    &nbsp;&nbsp;LISTAGEM DE USUÁRIOS</h3></strong>
                </div>
                <div class="card-body">
                   <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>GÊNERO</th>
                            <th>AÇÕES</th>
                        </tr>
                        <?php for ($i=0; $i < count($_SESSION['nomes']); $i++) { ?>
                        <tr id="tabela<?= $i ?>">
                            <td><?= $i ?></td>
                            <td class="coluna_nome"><?= htmlspecialchars($_SESSION['nomes'][$i]); ?></td>
                            <td class="coluna_email"><?= htmlspecialchars($_SESSION['emails'][$i]); ?></td>
                            <td class="coluna_genero"><?= htmlspecialchars($_SESSION['generos'][$i]); ?></td>
                            <td><button type="button" onclick="atualizarformulario('<?= $i ?>','<?= htmlspecialchars($_SESSION['emails'][$i]); ?>','<?= htmlspecialchars($_SESSION['nomes'][$i]); ?>','<?= htmlspecialchars($_SESSION['generos'][$i]); ?>','<?= htmlspecialchars($_SESSION['senhas'][$i]); ?>');" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-purple">Editar</button> <a href="excluir.php?pos=<?= $i ?>"><button class="btn btn-danger" type="button">Excluir</button></a></td><?php } ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal EDITAR-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">EDITAR USUARIO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="form" class="modal-body text-start">
                     <form id="form_edit" action="cadastro.php" method="post">
                        <label class="form-label">E-MAIL</label>
                        <input class="form-control" id="email" type="email" name="email" required autofocus placeholder="Digite o seu e-mail">
                        <br>
                        <label class="form-label">NOME</label>
                        <input class="form-control" type="text" id="nome" name="nome" required  placeholder="Digite o seu nome">
                        <br>
                        <label class="form-label">GÊNERO</label>
                        <select class="form-select" id="floatingSelect" aria-label="Selecione um gênero" name="genero" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                        <br>
                        <label class="form-label">SENHA</label>
                        <input class="form-control" id="senha" type="password" name="senha" required  placeholder="**********">
                        <br>
                        <input type="submit" class="btn btn-purple" value="CADASTRAR">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">FECHAR</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script language="javascript" type="text/javascript" >
    const url = "editar.php?id=";
    const email = document.getElementById("email");
    const nome = document.getElementById("nome");
    const genero = document.getElementById("floatingSelect");
    const form = document.getElementById("form_edit");
    const senha = document.getElementById("senha");

    function atualizarformulario(id, vemail, vnome, vgenero, vsenha) {
        email.value = vemail;
        nome.value = vnome;
        genero.value = vgenero;
        form.action = url+id;
        senha.value = vsenha;
    }

    document.addEventListener('DOMContentLoaded', function () {
    const pesquisar = document.querySelectorAll('.pesquisar');
    botao.addEventListener('click', function () {
        // Pega os valores do botão clicado
    const id = this.getAttribute('data-id');
    const nome = this.getAttribute('data-nome');
    const email = this.getAttribute('data-email');
    const genero = this.getAttribute('data-genero');
    const senha = this.getAttribute('data-senha');
                // Preenche os campos do modal
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-nome').value = nome;
    document.getElementById('edit-email').value = email;
    document.getElementById('edit-genero').value = genero;
    document.getElementById('edit-senha').value = senha;
    });
    });



</script>