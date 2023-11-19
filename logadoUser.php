<?php
	session_start();
	if(empty($_SESSION["user"]) || empty($_COOKIE["logado"])){
		header("Location:loginUser.php");
	} else {
		$user = $_SESSION["user"];
	}

	$cpuJSON = file_get_contents(__DIR__ . "./cpu.json");
	$arraycpu = json_decode($cpuJSON, true);
	$gpuJSON = file_get_contents(__DIR__ . "./gpu.json");
	$arraygpu = json_decode($gpuJSON, true);
	$ramJSON = file_get_contents(__DIR__ . "./ram.json");
	$arrayram = json_decode($ramJSON, true);
	$gameJSON = file_get_contents(__DIR__ . "./game.json");
	$arraygame = json_decode($gameJSON, true);
?>
<html>
    <head>
        <title>Benchmark Games</title>
    </head>
    <body>
        <form name="benchmark" method="get">
            <label for="jogos">Jogo:</label>
            <select name="jogos" id="jogos">
                <?php
                    foreach ($arraygame as $game){
                        echo "<option value='$game[nome]'>$game[nome]</option>";
                    }
                ?>
            </select><br>
            <label for="cpu">Processador:</label>
            <select name="cpu" id="cpu">
                <?php
                    foreach ($arraycpu as $cpu){
                        echo "<option value='$cpu[modeloCPU]'>$cpu[modeloCPU]</option>";
                    }
                ?>
            </select><br>
            <label for="gpu">Placa de Video:</label>
            <select name="gpu" id="gpu">
                <?php
                    foreach ($arraygpu as $gpu){
                        echo "<option value='$gpu[modeloGPU]'>$gpu[modeloGPU]</option>";
                    }
                ?>
            </select><br>

            <input type="submit" name="Enviar">
        </form>
        <p><a href="logout.php">Sair</a></p>
    </body>
</html>