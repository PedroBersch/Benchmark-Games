<?php
$usuario = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$resp = "";

if ($usuario) {
	if (in_array('', $usuario)) {
		$resp = "Preencha todos os campos!";
	} else {
		$arrayUser = array();
		if (file_exists(__DIR__, "./cadastroUser.json")) {
			$stringUser = file_get_contents(__DIR__, "./cadastroUser.json");
			$arrayUser = json_decode($stringUser, true);
		}
		$arrayUser[] = $usuario;
		$userJson = json_encode($arrayUser);
		$file = fopen(__DIR__, './cadastroUser.json', 'w+');
		fwrite($file, $userJson);
		fclose($file);

		header("Location:loginUser.php");
	}
}
?>
<html>

<head>
	<title>Benchmark Games - Cadastro</title>
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>
	<fieldset>
		<legend> CADASTRAR </legend>
		<form name="cadastro" method="POST">
				<label> Usuario: </label> <input type="text" name="nome" placeholder="Digite seu nome de usuario" required autofocus><br>
				<label> Senha: </label> <input type="password" name="senha" placeholder="Digite sua senha" required><br>
				<input type="submit" name="Enviar">
				<h3><?= $resp; ?></h3>
		</form>
	</fieldset>
</body>

</html>