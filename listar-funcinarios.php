<?php

require_once "conexao.php";

$sql = "SELECT * FROM funcionario";

$resultado = $conexao->query($sql);

?>

<h1>Funcionários</h1>

<a href="form-funcionario.php">Novo Funcionário</a>

<br><br>

<?php

    if (empty($resultado)){
?>

<p>Sem dados para exibir</p>

<?php } else { ?>

<table border ="1" cellpading="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Salário</th>
        <th>Cargo</th>
        <th>Setor</th>
        <th>Ações</th>
    </tr>
    <?php
        while($funcionario = $resultado->fetch_assoc()) {
            $objFuncionario = (object) $funcionario; 
            $idFuncionario =  $objFuncionario->id;
    ?>
    <tr>
        <td><?=  $objFuncionario->id ?></td>
        <td><?=  $objFuncionario->nome ?></td>
        <td><?=  $objFuncionario->sobrenome ?></td>
        <td><?=  $objFuncionario->salario ?></td>
        <td><?=  $objFuncionario->setor ?></td>
        <td><?=  $objFuncionario->cracha ?></td>
        <td>
            <a href = "editar-funcionairo.php?id=<?php echo $idFuncionario?>">Adicionar</a>
            <a href = "excluir-funcionario.php?id=<?php echo $idFuncionario ?>">Excluir</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php } ?>