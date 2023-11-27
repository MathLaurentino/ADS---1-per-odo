<?php 
    include_once(__DIR__ . "/../../controller/AlunoController.php");

    $alunoCont = new AlunoController();
    $alunos = $alunoCont->listar();
?>


<?php include_once(__DIR__ . "/../include/header.php"); ?>

<h3>Listagem de alunos</h3>

<div>
    <a href="inserir.php"  class="btn btn-success">Inserir</a>
</div>

<table border="1" class="table table-striped table-hover mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Estrangeiro</th>
            <th>Curso</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($alunos as $a): ?>
            <tr>
                <td><?= $a->getId(); ?></td>
                <td><?= $a->getNome(); ?></td>
                <td><?= $a->getIdade(); ?></td>
                <td><?= $a->getEstrangeiroDesc(); ?></td>
                <td><?= $a->getCurso(); ?></td>
                <td> 
                    <a href="alterar.php?id=<?= $a->getId() ?>">
                        <img src="../../img/btn_editar.png">
                    </a> 
                </td>
                <td> 
                    <a href="excluir.php?id=<?= $a->getId() ?>">
                        <img src="../../img/btn_excluir.png">
                    </a> 
                </td>            
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include_once(__DIR__ . "/../include/footer.php"); ?>