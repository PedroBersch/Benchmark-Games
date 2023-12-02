
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