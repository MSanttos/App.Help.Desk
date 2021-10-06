<?php
  session_start();

  $data = str_replace('#', '-', $_POST['data']);
  $titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

  $texto = $_SESSION['id'] . '#' . $titulo . '#' . $data. '#' . $categoria . '#' . $descricao . PHP_EOL;
  //abrindo arquivo
  //$arquivo = fopen('../../../app.help.desk/arquivo.txt','a');
  $arquivo = fopen('privado/arquivo.txt','a');
  //escrevendo o arquivo
  fwrite($arquivo, $texto);
  //fechando o arquivo
  fclose($arquivo);

  header('location: abrir_chamado.php');
?>