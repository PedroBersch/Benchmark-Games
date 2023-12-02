<?php
	session_start();
	$resp = "";
	$usuario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	if($usuario){
		if(in_array('',$usuario)){
           $resp = "Preencha todos os campos!";
       	} else {
			$encontrar = false;
            if("admin" == $usuario["nome"] && "admin" == $usuario["senha"]) {
                $_SESSION["user"] = $usuario;
                setcookie("logado","Logado",time()+60*60);
                $encontrar = true;
            }
            if($encontrar){
                header('Location: logadoADM.php');
            } else {
                $resp = "Administrador não encontrado!";
            }
        }
    }
?>
<html>
    <head>
        <title>Benchmark Games - Login</title>
    </head>
    <body>
        <form name="login"  method="POST">
            <fieldset>
            <legend> Login de Administrador</legend>
                <label> Usuario: </label> <input type="text" name="nome" placeholder="Digite seu nome de usuario"><br>
                <label> Senha: </label> <input type="password" name="senha" placeholder="Digite sua senha"><br>
                <input type="submit" name="Enviar">
                <h3><?= $resp; ?></h3>
            </fieldset>
        </form>
    </body>
</html>