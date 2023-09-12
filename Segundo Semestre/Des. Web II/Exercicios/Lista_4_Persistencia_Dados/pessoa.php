<?php

include_once("persistencia.php");
include_once("validacao.php");

$pessoas = buscarDados();

$msgErro = "";
$nome  = "";
$sobrenome  = "";
$idade = "";
$sexo   = "";

if(isset($_POST['submetido'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    $erros = validation($nome, $sobrenome, $idade, $sexo);

    if (!$erros) {
        $id = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );

        $pessoa = array('id' => $id,
                    'nome' => $nome,
                    'sobrenome' => $sobrenome,
                    'idade' => $idade,
                    'sexo' => $sexo);

        array_push($pessoas, $pessoa);

        salvarDados($pessoas);
    } else {
        $msgErro = implode("<br>", $erros);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Cadastro de Pessoas</h1>

    <h3>Formulário</h3>

    <form action="" method="POST">

        <input type="text" name="nome" id="nome" placeholder="Nome" value="<?= $nome ?>">

        <br><br>
        
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?= $sobrenome ?>">

        <br><br>

        <input type="number" name="idade" id="idade" placeholder="Idade" value="<?= $idade ?>">

        <br><br>

        <select name="sexo">
            <option value="">---Selecione o Sexo---</option>
            <option value="M" <?= $sexo === "M" ? "selected": "" ?>>Masculino</option>
            <option value="F" <?= $sexo === "F" ? "selected": "" ?>>Feminino</option>
        </select>

        <input type="hidden" name="submetido" value="1" />

        <br><br>

        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>

    </form>


    <div style="color: red;">
        <?= $msgErro ?>
    </div>


    <h3>Listagem de Pessoas</h3>
    <table border="1">

        <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Idade</td>
            <td>Sexo</td>
            <td></td>
        </tr>

        <?php foreach($pessoas as $p): ?>
            <tr>
                <td><?= $p["nome"] ?></td>
                <td><?= $p["sobrenome"] ?></td>
                <td><?= $p["idade"] ?></td>
                <td><?= ($p["sexo"] == "M") ? "Masculino" : "Feminino" ?></td>
                <td><a href="pessoa_del.php?id=<?= $p['id'] ?>" 
                        onclick="return confirm('Confirma a exclusão?');">
                        Excluir</a></td>
            </tr>
        <?php endforeach; ?>

    </table>


</body>
</html>