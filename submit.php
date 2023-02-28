<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$data = "Nome: $nome\nEmail: $email\nSenha: $senha\n\n";

	$file = fopen('usuarios.txt', 'a');
	fwrite($file, $data);
	fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuário Cadastrado</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-wrapper">
		<h2>Usuário Cadastrado</h2>
		<p>O usuário foi cadastrado com sucesso.</p>
	</div>
</body>
</html>
