<?php include_once(__DIR__ . "/../include/header.php"); ?>

<h3>Inserir Aluno</h3>

<form method="POST">
    <div>
        <label for="inpNome">Nome:</label>
        <input type="text" name="nome" id="inpNome">
    </div>

    <div>
        <label for="inpIdade">Idade:</label>
        <input type="number" name="idade" id="inpIdade">
    </div>

    <div>
        <label for="inpEstrang">Estrangeiro</label>
        <select name="estrang" id="inpEstrang">
            <option value="">Selecione</option>
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select>
    </div>

    <div>
        <label for="inpCurso">Curso:</label>
        <select name="estrang" id="inpEstrang">
            <option value="">Curso</option>
        </select>
    </div>
    
    <input type="hidden" name="submetido" value="1">

    <button type="submit">Gravar</button>
    <button type="reset">Limpar</button>
</form>

<?php include_once(__DIR__ . "/../include/footer.php"); ?>