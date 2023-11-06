<?php
    include_once(__DIR__ . "/../../controller/TimeController.php");
    include_once(__DIR__ . "/../../controller/PosicaoController.php");

    $timeController = new TimeController();
    $times = $timeController->listar();

    $posicaoController = new PosicaoController();
    $posicoes = $posicaoController->listar();
?>

<?php include_once(__DIR__ . "/../include/header.php"); ?>

<h3> <?php echo ($jogador && $jogador->getId() > 0) ? "Alterar" : "Inserir" ?> jogador</h3>


<div class="row">

    <div class="col-6">

        <form method="POST" action="">
            <div class="form-group">
                <label for="inpNome">Nome:</label>
                <input type="text" name="nome" id="inpNome" class="form-control"
                    value="<?php echo ($jogador ? $jogador->getNome() : "") ?>"
                >
            </div>

            <div class="form-group">
                <label for="inpIdade">Idade:</label>
                <input type="number" name="idade" id="inpIdade" class="form-control"
                    value="<?php echo ($jogador ? $jogador->getIdade() : "") ?>"
                >
            </div>

            <div class="form-group">
                <label for="inpCurso">Posição:</label>
                <select name="posicao" id="inpPosicao" class="form-control">
                    <option value="">-- selecione --</option>
                    <?php foreach($posicoes as $posicao): ?>

                        <option 
                            value="<?= $posicao->getId() ?>"
                            <?php echo ($jogador 
                                && $jogador->getPosicao() 
                                && $jogador->getPosicao()->getId() == $posicao->getId() 
                                ? "selected" : "") 
                            ?>
                        > 
                            <?= $posicao->getNome() ?>
                        </option>
                        
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="inpCurso">Time:</label>
                <select name="time" id="inpTime" class="form-control">
                    <option value="">-- selecione --</option>
                    <?php foreach($times as $time): ?>

                        <option 
                            value="<?= $time->getId() ?>"
                            <?php echo ($jogador 
                                && $jogador->getTime() 
                                && $jogador->getTime()->getId() == $time->getId() 
                                ? "selected" : "") 
                            ?>
                        > 
                            <?= $time->getNome() ?>
                        </option>
                        
                    <?php endforeach; ?>
                </select>
            </div>
            
            <input type="hidden" name="id" value="<?= ($jogador && $jogador->getId() > 0) ? $jogador->getId() : null ?>">
            <input type="hidden" name="submetido" value="1">

            <button type="submit" class="btn btn-success">Gravar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>

    </div>


    <div class="col-6">
        <?php 
            if (isset($msgErros) && $msgErros != null) {
                echo "<div class='alert alert-danger'>" . $msgErros . "</div>";
            }
        ?>
    </div>

</div>

<a href=listar.php class="btn btn-info mt-5"> Voltar </a>



<?php include_once(__DIR__ . "/../include/footer.php"); ?>