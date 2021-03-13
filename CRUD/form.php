<?php

	if(isset($_POST['enviar'])){
		include "conexao.php";

		$nome      = $_POST['nome'];
		$profissao = $_POST['profissao'];

		$conexao = conexao();
		$query = "INSERT INTO tb_pessoas(nome, profissao) VALUES (?,?)";
		$result = $conexao->prepare($query);
		$result->execute(array($nome, $profissao));

		header("Location: index.php");

	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>
	<div align="center">
		<h1>Formulário</h1><hr>
		<form action="" method="POST">
		Nome:<br>
		<input type="text" required name="nome"><br>
		Profissão:<br>
		<input type="text" required name="profissao"><br>
		<input type="submit" name="enviar">
	</form>	
	</div>
	
</body>
</html>
