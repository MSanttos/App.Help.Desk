<?php
  session_start();

  // $_SESSION['x'] = '<div style="background: red; color: white; padding: 5px">Sessão inicializada</div>';
  // print_r($_SESSION);

  //variavel verificar la
  $usuario_autenticado = false;

  //usuarios do sistema
  $usuarios_app = array(
    array('email' => 'michel@teste.com', 'senha' => '123'),
    array('email' => 'teste@teste.com', 'senha' => '123'),
    array('email' => 'mr@teste.com', 'senha' => '123'),
  );

  foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
      $usuario_autenticado = true;
    }
  }   
  if($usuario_autenticado){
    echo '<h4>Usuário autenticado.</h4>';
    $_SESSION['autenticado'] = 'SIM';
    header('location: home.php');

  } else {
    $_SESSION['autenticado'] = 'NAO';
    header('location: index.php?login=erro');
  } 
?>