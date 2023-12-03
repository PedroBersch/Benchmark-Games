
<html>

<head>
    <title>Benchmark Games</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <form name="benchmark" method="get">
        <label for="jogos">Jogo:</label>
        <select name="jogos" id="jogos">
            <?php
            foreach ($arraygame as $game) {
                echo "<option value='$game[nome]'>$game[nome]</option>";
            }
            ?>
        </select><br>
        <label for="cpu">Processador:</label>
        <select name="cpu" id="cpu">
            <?php
            foreach ($arraycpu as $cpu) {
                echo "<option value='$cpu[modeloCPU]'>$cpu[modeloCPU]</option>";
            }
            ?>
        </select><br>
        <label for="gpu">Placa de Video:</label>
        <select name="gpu" id="gpu">
            <?php
            foreach ($arraygpu as $gpu) {
                echo "<option value='$gpu[modeloGPU]'>$gpu[modeloGPU]</option>";
            }
            ?>
        </select><br>
        <label for="ram">Memoria RAM:</label>
        <select name="ram" id="ram">
            <?php
            foreach ($arrayram as $ram) {
                echo "<option value='$ram[modeloRAM]'>$ram[modeloRAM]</option>";
            }
            ?>
        </select><br>
        <input type="submit" name="Enviar">
        <p><a href="logout.php"><button>Sair</button></a></p>
    </form>
</body>

</html>