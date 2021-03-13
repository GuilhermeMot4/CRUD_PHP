<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Listagem</title>
</head>
<body>
	<div align="center">
		<h1>Registros</h1>
		<a href="form.php"><button>Novo +</button></a><hr>
		<table border="1">
			<tr>
				<th>id</th>
				<th>nome</th>
				<th>profissao</th>
				<th>editar</th>
				<th>excluir</th>
			<tr>
		<?php
			include "conexao.php";
			$conexao = conexao();
			$query = "SELECT * FROM tb_pessoas";
			$result = $conexao->prepare($query);
			$result->execute();

			foreach ($result as $lista) {

				$id        = $lista['id_pessoa'];
				$nome      = $lista['nome'];
				$profissao = $lista['profissao'];

				echo "
					<tr>
						<td>$id</td>
						<td>$nome</td>
						<td>$profissao</td>
						<td><a href='editar.php?id=$id'><button>Editar</button></a></td>
						<td><a href='excluir.php?id=$id'><button>Excluir</button></a></td>
					</tr>
					";
			}
		?>
		</table>
	</div>
	
</body>
</html>
