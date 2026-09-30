<?php

$idFuncionario = $_REQUEST["id"] ?? 0;

require_once "conexao.php";

$sql = "SELECT * FROM funcionario";

$resultado = $conexao->query($sql);

$funcionario = (object) $resultado->fetch_assoc() ?? null;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form method="POST" action="atualizar_funcionario.php">
    <h1>Editar</h1>
    <label for="nome">Nome:</label>
    <input type="text" hidden name="id" value=<?=$idFuncionario ?>>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui" value="<?= $funcionario->nome ?>">
    <button type="submit">Enviar</button>
</form>

</html>

