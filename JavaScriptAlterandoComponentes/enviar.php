<?php
	$nome = $_POST['email'];
	$descricao = $_POST['nome'];
	$mensagem = $_POST['mensagem'];

	// Realiza as alterações nos valores recebidos
	$nome = nl2br($mensagem); 
	$descricao = strtoupper($descricao);
	$mensagem = ucwords($nome);

	// Retorna uma mensagem de sucesso com as informações alteradas
	echo "Mensagem enviada com sucesso! <br>";
	echo "Nome: " . $nome . "<br>";
	echo "Descrição: " . $descricao . "<br>";
	echo "Mensagem: " . $mensagem;
?>
