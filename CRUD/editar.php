<?php
	$id = $_GET['id'];
	include "conexao.php";
	$conexao = conexao();
	$query = "SELECT * FROM tb_pessoas WHERE id_pessoa = ?";
	$result = $conexao->prepare($query);
	$result->execute(array($id));

	foreach ($result as $lista) {

	}

	if(isset($_POST['enviar'])){
		$nome      = $_POST['nome'];
		$profissao = $_POST['profissao'];

		$conexao = conexao();
		$query = "UPDATE tb_pessoas SET nome = ?, profissao = ? WHERE id_pessoa = ? ";
		$result = $conexao->prepare($query);
		$result->execute(array($nome, $profissao, $id));
		$result = null;
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
		<input type="text" required name="nome" value="<?php echo  $lista['nome']; ?>"><br>
		Profissão:<br>
		<input type="text" required name="profissao" value="<?php echo  $lista['profissao']; ?>"><br>
		<input type="submit" name="enviar">
	</form>	
	</div>
	
</body>
</html>