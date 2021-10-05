<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="App para chamado de serviços"/>
<meta name="author" content="Michel Santos"/>
<meta name="developer" content="https://www.linkedin.com/in/michel-santos-965002158/"/>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
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
</nav>

<div class="container">    
  <div class="row">
    <div class="card-login">
      <div class="card">
        <div class="card-header">
          <i>Login</i>
        </div>
        <div class="card-body">
          <form action="valida_login.php" method="POST">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div>

            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
              <div class="mb-3" style="text-align: center; background: red; color: white; padding: 10px;">
                Usuário ou senha estão incorretos.
              </div>
            <?php }?>

            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro:403'){ ?>
              <div class="mb-3" style="text-align: center; background: red; color: white; padding: 10px;">
                Para acessar estas páginas, é necessário realizar o login novamente.
              </div>
            <?php }?>
                
            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
          </form>
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