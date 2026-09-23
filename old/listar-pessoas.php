<?php

require_once "conexao.php";

$sql = "SELECT * FROM funcionario";

$resultado = $conexao->query($sql);

while ($pessoa = $resultado->fetch_assoc()){
    $nome = $pessoa["nome"];
    echo $nome;
}