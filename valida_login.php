<link rel="stylesheet" href="assets/css/style.css">

<?php
  //variavel verificar la
  $usuario_autenticado = false;

  //usuarios do sistema
  $usuarios_app = array(
    array('email' => 'michel@teste.com', 'senha' => '123'),
    array('email' => 'teste@teste.com', 'senha' => '123'),
    array('email' => 'mr@teste.com', 'senha' => '123'),
  );

  // echo '<pre>';
  // print_r($usuarios_app);
  // echo '</pre>';
  
  foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
      $usuario_autenticado = true;
    }
  }   
    if($usuario_autenticado){
      echo '<h4>Usuário autenticado.</h4>';
    } else {
      header('location: index.php?login=erro');
    } 
?>