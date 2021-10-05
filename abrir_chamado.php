<?php require_once "valida_acesso.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="App para chamado de serviços"/>
<meta name="author" content="Michel Santos"/>
<meta name="developer" content="https://www.linkedin.com/in/michel-santos-965002158/"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>App Help Desk</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
    App Help Desk
  </a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="logoff.php" class="nav-link">SAIR</a>
    </li>
  </ul>
</nav>

<div class="container">    
  <div class="row">

    <div class="card-abrir-chamado">
      <div class="card">
        <div class="card-header">
          Abertura de chamado
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              
              <form method="post" action="registra_chamado.php">
                <div class="form-group">
                  <label>Título</label>
                  <input type="text" class="form-control" placeholder="Título" name="titulo">
                </div>
                
                <div class="form-group">
                  <label>Categoria</label>
                  <select class="form-control" name="categoria">
                    <option>Criação Usuário</option>
                    <option>Impressora</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Rede</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Descrição</label>
                  <textarea class="form-control" rows="3" name="descricao"></textarea>
                </div>

                <div class="row mt-5">
                  <div class="col-6">
                    <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                  </div>

                  <div class="col-6">
                    <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>