<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>Formulario para inscrição de competidor</p>
<form action="script.php" method="post">
  <?php

  	$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
  	  if(!empty($mensagemDeSucesso)){
  		echo $mensagemDeSucesso;
  	  }

  	#operador termario + isset(saber se uma variável foi iniciada)
  	$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
  	  if(!empty($mensagemDeErro)){
  		echo $mensagemDeErro;
  	  }


  ?>
  <p>Seu nome: <input type="text" name="nome" /></p>
  <p>Sua idade: <input type="text" name="idade" /></p>
  <p><input type="submit" value="Enviar dados!" /></p>
</form>
</body>
</html>