<?php
	 $id = $_GET['id'];
	 include "conexao.php";
	 $conexao = conexao();
	 $query = "DELETE FROM tb_pessoas WHERE id_pessoa = ?";
	 $result = $conexao->prepare($query);
	 $result->execute(array($id));
	 $result = null;

	 header("Location: index.php");
?>