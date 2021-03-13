<?php
	
	function conexao(){
		try {
			$conexao = new PDO("mysql:host=localhost;dbname=registros", "root", "");	
		} catch (PDOException $e) {
			echo $e;
		}
		
	return $conexao;
	}
?>