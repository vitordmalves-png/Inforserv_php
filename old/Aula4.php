<?php

for($i = 5; $i >= 0; $i--) {
    echo ($i) . "<br>";
}

$contador = 5;
while ($contador >= 0) {
    echo $contador . "<br>";

    $contador--;
}

for ($i = 10; $i > 0; $i--) {
    $tabuada = 5 * $i ;
    $saida = "5 x $i = $tabuada";
    echo $saida;
    echo "<br>";    
}
for ($x = 50; $x > 1; $x --) {
    $Descobrir = $x % 2;
    if ($Descobrir == 0) {
        echo "<br>"; 
        echo ($x);
    }
}
        echo "<br>"; 
        echo "<br>"; 

for ($N = 1; $N < 100 ; $N ++) {
$ehPrimo = true;
$penultimo = $N - 1;
    for($divisor= 2; $divisor <= $penultimo; $divisor++){
        $resto = $N % $divisor;
        $naoehPrimo = $resto == 0;
        if ($naoehPrimo) {
            $ehPrimo =  false;
            break;
        
        }
    }
    if ($ehPrimo) {
        echo $N;
        echo "<br>";
    }
}
        echo "<br>";

$funcionarios = ["Ariel","Jão","Maria"];

foreach ($funcionarios as $funcionarios) {
    echo $funcionarios . "<br>";
}

$funcionariosAssociativos = [
    "nome" => "Ariel",
    "cargo" => "Professor", 
 ] ;

 $PrimeiroFuncionario = [
    "nome" => "Pietro",
    "setor" => "RH", 
    "Salário" => 1500,
    "descontoINSS" => "230"
 ] ;
  foreach ($PrimeiroFuncionario as $idx => $funcionario)
    echo "$idx: $funcionario" . "<br>";

$porcento = $PrimeiroFuncionario["Salário"] * 10;
$Final = $porcento / 100;
$Aumento = $PrimeiroFuncionario["Salário"] + $Final;

function real(float $valor){
    echo number_format($valor,2,",",".");
}

echo "<br>";
function Calculadora(){
    function somar(float $num1, float $num2){
        $Resultado = ($num1 + $num2);
        return $Resultado; 
    }
    function subtracao(float $num1, float $num2){
        $Resultado = ($num1 - $num2);
        return $Resultado; 
    }
    function divisao(float $num1, float $num2){
        $Resultado = ($num1 / $num2);
        return $Resultado; 
    }
    function multiplicação(float $num1, float $num2){
        $Resultado = ($num1 * $num2);
        return $Resultado; 
    }
}

######Tabuada#######
function tabuada(float $num1, float $num2) {
    for ($i = $num1; $i > $num2; $i--) {
        $tabuada = 5 * $i ;
        $saida = "5 x $i = $tabuada";
        echo $saida;
        echo "<br>";
}   
}
tabuada(10,1);

#######IMC#######
function IMC(float $peso, string $alturaCalculo){
    $IMC = $peso / $alturaCalculo;

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
}

#######Medias#######
function Medias($AvaliaçãoA, $AvaliaçãoB,$PesoA,$PesoB,$NumeroAvaliações){
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
}

Medias(6,6,10,10,2);

#######Salário ########

function salario(float $salario, float $aumentoPorcentro){
    $porcento =  $salario * $aumentoPorcentro;
    $Final = $porcento / 100;
    $Aumento = $salario + $Final;
    return $Aumento;
}
echo salario(1,10);