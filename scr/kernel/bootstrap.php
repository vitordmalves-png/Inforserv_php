<?php

session_start();

require_once "/scr/config/conecao.php";
require_once "/scr/database/BancoDeDados.php";
require_once "/scr/models/funcionario/FuncionariModel.php";

$bancoDeDados = new BancoDeDados($conexao);
$funcionarioModel= new FuncionarioModel($bancoDeDados);