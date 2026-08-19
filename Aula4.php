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

for ($y = 20; $y > 1; $y --) {
    $PrimeiraEtapa = $x % 2 ;
    $SegundaEtapa = $x % 3 ;
    if ($PrimeiraEtapa != 0) {
    } else if ($SegundaEtapa != 0) {
         echo $y;
    }
}