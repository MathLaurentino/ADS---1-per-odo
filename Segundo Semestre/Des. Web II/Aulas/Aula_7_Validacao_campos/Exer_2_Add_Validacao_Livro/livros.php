<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("persistencia.php");

$titulo = "";
$genero = "";
$qtd_pag = "";
$autor = "";
$msgError = "";

$livros = buscarDados();

if(isset($_POST['submetido'])) {
    $titulo = trim($_POST['titulo']);
    $genero = trim($_POST['genero']);
    $qtd_pag = trim($_POST['qtd_pag']);
    $autor = trim($_POST['autor']);

    if (!$titulo)
        $msgError = "informe o titulo";
    elseif (strlen($titulo) > 50 || strlen($titulo) < 3)
        $msgError = "o titulo tem que ter no minimo 3 e no maximo 50 caracteres";
    elseif (!$genero) 
        $msgError = "informe o genero";
    elseif (!$qtd_pag || $qtd_pag  <= 0) 
        $msgError = "informe a quantidade de páginas";
    elseif (!$autor) 
        $msgError = "informe o autor";
    else {
        $id = vsprintf( '%s%s-%s-%s-%s-%s%s%s',
            str_split(bin2hex(random_bytes(16)), 4) );

        $livro = array('id' => $id,
                    'titulo' => $titulo,
                    'genero' => $genero,
                    'paginas' => $qtd_pag,
                    'autor' => $autor);
        array_push($livros, $livro);

        //Persistir o array livros no arquivo
        salvarDados($livros);
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>

    <h1>Cadastro de livros</h1>

    <h3>Formulário de livros</h3>
    <form action="" method="POST">
        <input type="text" name="titulo" placeholder="Informe o título" value="<?= $titulo ?>"/>
        
        <br><br>

        <select name="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="D" <?= ($genero === 'D') ? 'selected' : '' ?>>Drama</option>
            <option value="F" <?= ($genero === 'F') ? 'selected' : '' ?>>Ficção</option>
            <option value="R" <?= ($genero === 'R') ? 'selected' : '' ?>>Romance</option>
            <option value="O" <?= ($genero === 'O') ? 'selected' : '' ?>>Outro</option>
        </select>

        <br><br>

        <input type="number" name="qtd_pag" placeholder="Informe a quantidade de páginas" value="<?= $qtd_pag ?>"/>

        <br><br>

        <input type="text" name="autor" placeholder="Informe o autor" value="<?= $autor ?>"/>

        <br><br>

        <input type="hidden" name="submetido" value="1" />

        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>
    </form>

    <div style="color: red;"><?= $msgError ?></div>

    <h3>Listagem de livros</h3>
    <table border="1">
        <tr>
            <td>Título</td>
            <td>Gênero</td>
            <td>Páginas</td>
            <td>Autor</td>
            <td></td>
        </tr>

        <?php foreach($livros as $l): ?>
            <tr>
                <td><?= $l['titulo'] ?></td>
                <td><?php 
                    switch($l['genero']) {
                        case 'D':
                            echo 'Drama';
                            break;
                        
                        case 'F':
                            echo 'Ficção';
                            break;

                        case 'R':
                            echo 'Romance';
                            break;

                        case 'O':
                            echo 'Outro';
                            break;

                        default:
                            echo $l['genero'];
                    } 
                ?></td>
                <td><?= $l['paginas'] ?></td>
                <td><?= $l['autor'] ?></td>
                <td><a href="livros_del.php?id=<?= $l['id'] ?>" 
                        onclick="return confirm('Confirma a exclusão do livro?')">
                        Excluir</a></td>
            </tr>   
        <?php endforeach; ?>

    </table>
    
</body>
</html>