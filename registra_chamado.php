<?php
  $texto = $_POST['titulo'] . ' ' . $_POST['categoria'] . ' ' . $_POST['descricao'] . PHP_EOL;
  //abrindo arquivo
  $arquivo = fopen('arquivo.txt','a');
  //escrevendo o arquivo
  fwrite($arquivo, $texto);
  //fechando o arquivo
  fclose($arquivo);

  header('location: abrir_chamado.php');
?>