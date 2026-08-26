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
    "Salário" => 15,
    "descontoINSS" => "230"
 ] ;
  foreach ($PrimeiroFuncionario as $idx => $funcionario)
    echo "$idx: $funcionario" . "<br>";

$porcento = $PrimeiroFuncionario["Salário"] * 10;
$Final = $porcento / 100;
$Aumento = $PrimeiroFuncionario["Salário"] + $Final;
echo real($Aumento) ;

function real(float $valor){
    echo number_format($valor,2,",",".");
}

echo "<br>";
