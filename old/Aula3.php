<?php

$idade = 17;

if ($idade <=17) {
    echo("Proibido");
} else {
    echo("Liberado");
}
    echo("<br>");
$peso =  60;
$altura = 1.80;
$AlturaCalculo = $altura * $altura;

$IMC = $peso / $AlturaCalculo;

if ($IMC <= 18.5 ) {
    echo "Abaixo do peso";
} else if ($IMC <= 24.9 ) {
    echo "No Peso Ideal";
} else if ($IMC <= 29.9 ) {
    echo "Sobrepeso";
} else if ($IMC <= 39.9) {
    echo "Obesidade";
} else {
    echo ("Obesidade grave");
}

######## Calculadora ##########
echo("<br>");
$NumA = 5763;
$NumB = 2 ;
$operador = "+";
if ($operador == "+") {
    $R = $NumA + $NumB ;
    echo "Seu resultado é $R";
} else if ($operador == "*") {
    $R2 = $NumA * $NumB ;
    echo "Seu resultado é $R2";
} else if ($operador == "/") {
    $R3 = $NumA / $NumB ;
    echo "Seu resultado é $R3";
} else if ($operador == "-") {
    $R4 = $NumA - $NumB ;
    echo "Seu resultado é $R4";
} else {
    echo ("Invalido");
}

######## Área do Quadrado ########
echo("<br>");
$LadoA = 10;
$LadoB = 10; 
$Resultado = $LadoA * $LadoB;
echo "Resultado é $Resultado m²";
######## Área do Triângulo ########
echo("<br>");
$lado = 10;
$lado² = $lado * $lado;
$Meio = $lado² / 4;
$Final = $Meio * 1.73 ;
echo "A Área do Seu Triângulo Equilatero é $Final";


######## Média Aritimética, Harmonica e Ponderada ##########
echo("<br>");

$AvaliaçãoA = 7;
$AvaliaçãoB = 9;
$PesoA = 10;
$PesoB = 10;
$NumeroAvaliações = 2;  

$Aritimética1 = $AvaliaçãoA + $AvaliaçãoB;
$Aritimética2 = $Aritimética1 / $NumeroAvaliações ;
if ($Aritimética2 >= 7){
    echo "Passou";
} else if ($Aritimética2 >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
} 
echo("<br>");

$Ponderada = ($AvaliaçãoA * $PesoA) + ($AvaliaçãoB * $PesoB) ;
$ResultadoPonderada = $Ponderada / ($PesoA + $PesoB);
if ($ResultadoPonderada >= 7){
    echo "Passou";
} else if ($ResultadoPonderada >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
} 
echo("<br>");


$harmonicaA = 1 / $AvaliaçãoA;
$harmonicaB = 1 / $AvaliaçãoB;
$Harmonica = $NumeroAvaliações / ($harmonicaA + $harmonicaB);

if ($Harmonica >= 7){
    echo "Passou";
} else if ($Harmonica >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
} 
echo("<br>");

