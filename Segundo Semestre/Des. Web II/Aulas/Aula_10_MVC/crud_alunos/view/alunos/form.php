<?php
    include_once(__DIR__ . "/../../controller/CursoController.php");

    $cursoCont = new CursoController();
    $cursos = $cursoCont->listar();
?>

<?php include_once(__DIR__ . "/../include/header.php"); ?>

<h3> <?php echo ($aluno && $aluno->getId() > 0) ? "Alterar" : "Inserir" ?> Aluno</h3>


<div class="row">

    <div class="col-6">

        <form method="POST" action="">
            <div class="form-group">
                <label for="inpNome">Nome:</label>
                <input type="text" name="nome" id="inpNome" class="form-control"
                    value="<?php echo ($aluno ? $aluno->getNome() : "") ?>"
                >
            </div>

            <div class="form-group">
                <label for="inpIdade">Idade:</label>
                <input type="number" name="idade" id="inpIdade" class="form-control"
                    value="<?php echo ($aluno ? $aluno->getIdade() : "") ?>"
                >
            </div>

            <div class="form-group">
                <label for="inpEstrang">Estrangeiro</label>
                <select name="estrang" id="inpEstrang" class="form-control">
                    <option value="">Selecione</option>
                    <option value="S" 
                        <?php echo ($aluno && $aluno->getEstrangeiro() == "S" ? "selected" : "") ?>
                    >Sim</option>
                    <option value="N"
                        <?php echo ($aluno && $aluno->getEstrangeiro() == "N" ? "selected" : "") ?>
                    >Não</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inpCurso">Curso:</label>
                <select name="curso" id="inpCurso" class="form-control">
                    <option value="">Curso</option>
                    <?php foreach($cursos as $curso): ?>

                        <option 
                            value="<?= $curso->getId() ?>"
                            <?php echo ($aluno 
                                && $aluno->getCurso() 
                                && $aluno->getCurso()->getId() == $curso->getId() 
                                ? "selected" : "") 
                            ?>
                        > 
                            <?= $curso->getNome() ?>
                        </option>
                        
                    <?php endforeach; ?>
                </select>
            </div>
            
            <input type="hidden" name="id" value="<?= ($aluno && $aluno->getId() > 0) ? $aluno->getId() : null ?>">
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