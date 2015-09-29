<?php
	
	/*Descrição = Descrição de forma correta*/
	header ('Content-Type: text/html; charset=UTF-8');
		echo '<html>';
		
	
		
	//Quebra de linha
	echo "<br>";
	
	$nome = "";
	$sexo = "";
	$idade = "";
	/*$telefone = "";*/
	
	//Recupera o campo nome
	$nome = $_POST["nome"];
	echo "Nome: $nome";
	echo "<br>";
	
	//Recupera o campo sexo
	$sexo = $_POST["sexo"];
	echo "Sexo: $sexo";
	echo "<br>";
	
	//Recupera o campo idade
	$idade = $_POST["idade"];
	echo "Idade: $idade";
	echo "<br>";
	
	//Recupera o campo email
	$email = $_POST["email"];
	echo "Email: $email";
	echo "<br>";
	
	// Recuperar o campo telefone
	$telefone = $_POST["telefone"];
	echo "Telefone: $telefone";
	echo "<br>";
	
	//Recupera o campo estado
	$estado = $_POST["estado"];
	echo "Estado: $estado";
	echo "<br>";
	
	//Recupera o campo cidade
	$cidade = $_POST["cidade"];
	echo "Cidade: $cidade";
	echo "<br>";
	
	//Recupera o campo descricao
	$descricao = $_POST["descricao"];
	echo "Descrição: $descricao";
	echo "<br>";


?>