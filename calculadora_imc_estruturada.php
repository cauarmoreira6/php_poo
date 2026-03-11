<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora Estruturada de IMC</h1>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" step="0.1" required><br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);
        $classificacao = "";

        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc < 25) {
            $classificacao = "Peso normal";
        } elseif ($imc < 30) {
            $classificacao = "Sobrepeso";
        } else {
            $classificacao = "Obesidade";
        }

        echo "<h2>Resultado:</h2>";
        echo "Seu IMC é: " . number_format($imc, 2) . "<br><br>";
        echo "Classificação: " . $classificacao;
    }
    ?>  
</body>
</html>