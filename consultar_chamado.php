<?php require_once "valida_acesso.php" ?>
<?php

  //chamados
  $chamados = [];

  $arquivo = fopen('arquivo.txt','r'); 
  //varendo linhas e retornando
  while (!feof($arquivo)){//testa fim do arquivo
    $registro = fgets($arquivo);//linhas
    $chamados[] = $registro;
  }

  fclose($arquivo);

?>

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
    <div class="card-consultar-chamado">
      <div class="card">
        <div class="card-header">
          Consulta de chamado
        </div>
        <div class="card-body">

        <?php foreach ($chamados as $chamado) {
          $chamado_dados = explode(' ', $chamado); 
            if (count($chamado_dados) < 4) {
              continue; 
          } ?>
          <div class="card mb-3 bg-light">
            <div class="card-body">
              <h5 class="card-title">Título: <?=$chamado_dados[0]?></h5>
              <p class="card-title text-muted">Data abertura: <?=$chamado_dados[1]?></p>
              <p class="card-subtitle mb-2 text-muted">Categoria: <?=$chamado_dados[2]?></p>
              <p class="card-text text-muted">Descrição: <?=$chamado_dados[3]?></p>
            </div>
          </div>

        <?php } ?>

          <div class="row mt-5">
            <div class="col-6">
            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
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