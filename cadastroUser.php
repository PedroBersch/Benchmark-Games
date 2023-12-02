
<html>

<head>
	<title>Benchmark Games - Cadastro</title>
</head>

<body>
	<form name="cadastro" method="POST">
		<fieldset>
			<legend> Cadastrar </legend>
			<label> Usuario: </label> <input type="text" name="nome" placeholder="Digite seu nome de usuario" required><br>
			<label> Senha: </label> <input type="password" name="senha" placeholder="Digite sua senha" required><br>
			<input type="submit" name="Enviar">
			<h3><?= $resp; ?></h3>
		</fieldset>
	</form>
</body>

</html>