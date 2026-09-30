<?php

$idFuncionario = $_REQUEST["id"] ?? 0;

$nome = $_POST["nome"] ??"";
$salario = $_POST["salario"] ?? 0;
$cracha = $_POST["cracha"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$setor = $_POST["setor"] ?? "";

require_once "conexao.php";

$sql = "UPDATE infoserv.funcionario
SET nome='$nome', salario='$salario', cracha='$cracha', sobrenome='$sobrenome', setor='$setor'
WHERE id=$idFuncionario ";

$resultado = $conexao->query($sql);

$funcionario = (object) $resultado->fetch_assoc() ?? null;

sleep(10);
header("location: listar-funcinarios.php");

function invalido($valor) {
    if (empty($valor)) {
        header("location: listar-funcinarios.php");
        exit;
    }
};
invalido($nome);
invalido($salario);
invalido($cracha);
invalido($setor);



