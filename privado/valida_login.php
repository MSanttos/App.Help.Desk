<?php
  session_start();

  // $_SESSION['x'] = '<div style="background: red; color: white; padding: 5px">Sessão inicializada</div>';
  // print_r($_SESSION);

  //variavel verificar la
  $usuario_autenticado = false;
  $usuario_id = null;
  $usuario_perfil_id = null;

  $perfis = [1 => 'Administrativo', 2 => 'Usuário'];


  //usuarios do sistema
  $usuarios_app = array(
    array('id'=> 1, 'email' => 'adm@teste.com', 'senha' => '123', 'perfil_id' => 1),
    array('id'=> 2, 'email' => 'operador@teste.com', 'senha' => '123', 'perfil_id' => 1),
    array('id'=> 3, 'email' => 'user@teste.com', 'senha' => '123', 'perfil_id' => 2),
  );

  foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
      $usuario_autenticado = true;
      //print_r($user);//mostra id do usuário
      $usuario_id = $user['id'];
      $usuario_perfil_id = $user['perfil_id'];
    }
  }   
  if($usuario_autenticado){
    echo '<h4>Usuário autenticado.</h4>';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('location: home.php');

  } else {
    $_SESSION['autenticado'] = 'NAO';
    header('location: index.php?login=erro');
  } 
?>