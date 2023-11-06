<?php
    include_once(__DIR__."/../include/header.php");
    include_once(__DIR__."/../../controller/JogadorController.php");
    $jogadorCont=new JogadorController;
    $jogadores=$jogadorCont->listar();
?>

    <h3>Listagem de Jogadores</h3>

    <div>
    <a class="btn btn-success" href="inserir.php">Inserir</a>
    </div>

    <table border="1" class="table table-striped table table-hover mt-3">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Idade</td>
                <td>Posicao</td>
                <td>Time</td>
                <td>Excluir</td>
                <td>Alterar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($jogadores as $j):?>
                <tr>
                    <td><?= $j->getId()?></td>
                    <td><?= $j->getNome()?></td>
                    <td><?= $j->getIdade()?></td>
                    <td><?= $j->getPosicao()?></td>
                    <td><?= $j->getTime() ?>
                    <td>
                        <a href="excluir.php?id=<?= $j->getId() ?>">
                            <img src="../../img/btn_excluir.png">
                        </a> 
                    </td>
                    <td>
                        <a href="alterar.php?id=<?= $j->getId() ?>">
                            <img src="../../img/btn_editar.png">
                        </a> 
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

<?php include_once(__DIR__."/../include/footer.php"); ?>