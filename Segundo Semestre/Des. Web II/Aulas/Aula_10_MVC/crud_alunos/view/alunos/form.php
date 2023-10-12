<?php
    include_once(__DIR__ . "/../../controller/CursoController.php");

    $cursoCont = new CursoController();
    $cursos = $cursoCont->listar();
?>

<?php include_once(__DIR__ . "/../include/header.php"); ?>

<h3> <?php echo ($aluno && $aluno->getId() > 0) ? "Alterar" : "Inserir" ?> Aluno</h3>

<a href=listar.php> Listar </a>

<form method="POST" action="">
    <div>
        <label for="inpNome">Nome:</label>
        <input type="text" name="nome" id="inpNome"
            value="<?php echo ($aluno ? $aluno->getNome() : "") ?>"
        >
    </div>

    <div>
        <label for="inpIdade">Idade:</label>
        <input type="number" name="idade" id="inpIdade"
            value="<?php echo ($aluno ? $aluno->getIdade() : "") ?>"
        >
    </div>

    <div>
        <label for="inpEstrang">Estrangeiro</label>
        <select name="estrang" id="inpEstrang">
            <option value="">Selecione</option>
            <option value="S" 
                <?php echo ($aluno && $aluno->getEstrangeiro() == "S" ? "selected" : "") ?>
            >Sim</option>
            <option value="N"
                <?php echo ($aluno && $aluno->getEstrangeiro() == "N" ? "selected" : "") ?>
            >Não</option>
        </select>
    </div>

    <div>
        <label for="inpCurso">Curso:</label>
        <select name="curso" id="inpCurso">
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
    
    <input type="hidden" name="submetido" value="1">

    <button type="submit">Gravar</button>
    <button type="reset">Limpar</button>
</form>

<?php 
    if (isset($msgErros)) {
        echo "<div style='color: red'>" . $msgErros . "</div>";
    }
?>

<?php include_once(__DIR__ . "/../include/footer.php"); ?>