<?php

$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";

echo  "Nome: $nome";
echo "<br>";
echo "E-mail: $email";

$htmlVoltar = '<br>
        <button>
        <a href="Funcionario.php" type="button">voltar</a>
        <button> ';
    
echo $htmlVoltar;