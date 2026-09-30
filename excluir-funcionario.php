<?php

$idFuncionario = $_REQUEST["id"] ?? 0;

require_once "conexao.php";

$sql = "DELETE FROM funcionario WHERE id=$idFuncionario";

$resultado = $conexao->query($sql);

header("location: listar-funcinarios.php") ;
exit;
//while($funcionario = $resultado->fetch_assoc()) {
//    $objFuncionario = (object) $funcionario;
//        echo $objFuncionario->nome ;
//    }