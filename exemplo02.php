<?php

function calcularDescontos ($salario, $previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, ',', '.');
}

$joaoNome = "João Filho";
$joaoDescontos = calcularDescontos(1000, 100);

$mariaNome = "Maria Rute";
$mariaDescontos = calcularDescontos(2000, 200);

$joseNome = "José Salgado";
$joseDescontos = calcularDescontos(3000, 300);

echo "O Valor de desconto de $joaoNome é $joaoDescontos. <br>";
echo "O Valor de desconto de $mariaNome é $mariaDescontos. <br>";
echo "O Valor de desconto de $joseNome é $joseDescontos. <br>";