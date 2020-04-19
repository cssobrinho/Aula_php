<?php
//iniciando a seção para guardar os dados do formulario!
session_start();

//array para guardar categorias
$categorias=[];
$categorias[]='infantil';
$categorias[]='adolescente'; 
$categorias[]='adulto';

$nome= $_POST['nome'];
$idade= $_POST['idade'];

//validações do nome
if (empty($nome)) { #nome vazio + $_SESSION == array associativo chave + valor
	$_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio! Preencha o nome por favor!";
	header('location: index.php');
}

else if (strlen($nome) < 3) {#nome menor que 03
	$_SESSION['mensagem-de-erro'] = "O nome deve conter mais de três (03) caracteres!";
	header('location: index.php');
}

else if (strlen($nome) > 40){#nome maior que 40
	$_SESSION['mensagem-de-erro'] = "O nome não deve conter mais de quarenta (40) caracteres!";
	header('location: index.php');
}

else if(!is_numeric($idade)){
	$_SESSION['mensagem-de-erro'] = "Informe um número para idade!";
	header('location: index.php');
}

//validação da idade
if ($idade >= 6 && $idade <= 12){
	for($i= 0; $i < count($categorias); $i++){
		if ($categorias[$i]=='infantil'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
		    header('location: index.php');
		    return;
		}
	}
} elseif($idade >= 13 && $idade <= 18){
	for($i= 0; $i < count($categorias); $i++){
		if ($categorias[$i]=='adolescente'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
		    header('location: index.php');
		    return; 
		}
	}
} else
{
	for($i= 0; $i < count($categorias); $i++){
		if ($categorias[$i]=='adulto'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
		    header('location: index.php');
		    return;
		}
	} 
}

?>