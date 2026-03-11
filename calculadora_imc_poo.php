<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" step="0.1" required><br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $calculadora = new CalculadoraImc($peso, $altura);
        $imc = $calculadora->calcularImc();
        $classificacao = $calculadora->classificarIMC();

        echo "<h2>Resultado:</h2>";
        echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
        echo "Classificação: " . $classificacao;
    } 

    class CalculadoraImc {
    private $peso;
    private $altura;

    public function __construct($peso, $altura) {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularImc() {
        $imc = $this->peso / ($this->altura * $this->altura);
        return $imc;
    }

    public function classificarIMC() {
        $imc = $this->calcularIMC();
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
        }
    }
?>