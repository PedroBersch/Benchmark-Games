<?php
session_start();
$resp = "";
$usuario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($usuario) {
	$stringJSON = file_get_contents(__DIR__ . "./cadastroUser.json");
	$arrayUser = json_decode($stringJSON, true);

	if (in_array('', $usuario)) {
		$resp = "Preencha todos os campos!";
	} else {
		$encontrar = false;
		foreach ($arrayUser as $i => $user) {
			if ($user["nome"] == $usuario["nome"] && $user["senha"] == $usuario["senha"]) {
				$_SESSION["user"] = $user;
				$_SESSION["i"] = $i;
				setcookie("logado", "Logado", time() + 60 * 60);
				$encontrar = true;
				break;
			}
		}
		if ($encontrar) {
			header('Location: logadoUser.php');
		} else {
			$resp = "Usuario não encontrado!";
		}
	}
}

?>
<html>

<head>
	<title>Benchmark Games - Login</title>
</head>

<body>
	<form name="login" method="POST">
		<fieldset>
			<legend> Fazer Login </legend>
			<label> Usuario: </label> <input type="text" name="nome" placeholder="Digite seu nome de usuario"><br>
			<label> Senha: </label> <input type="password" name="senha" placeholder="Digite sua senha"><br>
			<input type="submit" name="Enviar">
			<h3><?= $resp; ?></h3>
		</fieldset>
	</form>
</body>

</html>