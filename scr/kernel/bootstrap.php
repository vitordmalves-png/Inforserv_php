<?php

require_once "/scr/config/conecao.php";
require_once "/scr/database/BancoDeDados.php";
require_once "/scr/models/funcionario/FuncionarioModel.php";

$bancoDeDados = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($bancoDeDados);
$funcinarioController = new FuncionarioController($funcionarioModel
);
