<?php

class Livro {

    private $titulo;
    private $autor;
    private $genero;
    private $qtPaginas;

    public function __construct(string $titulo, string $autor, string $geneto, int $qtPaginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $geneto;
        $this->qtPaginas = $qtPaginas;
    }
    
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    public function getQtPaginas()
    {
        return $this->qtPaginas;
    }
    public function setQtPaginas($qtPaginas)
    {
        $this->qtPaginas = $qtPaginas;

        return $this;
    }
}

$livro1 = new Livro("papapa", "Matheus", "terror", 90);
$livro2 = new Livro("fafafa", "Marcos", "comedia", 150);
$livro3 = new Livro("fififi", "Maria", "romance", 200);

$arrayLivros = array($livro1, $livro2, $livro3);

?>

<table style="border: solid black;">
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Genero</th>
        <th>QtPaginas</th>
    </tr>

    <?php foreach ($arrayLivros as $livro): ?>
        <tr>
            <td><?= $livro->getTitulo() ?></td>
            <td><?= $livro->getAutor() ?></td>
            <td><?= $livro->getGenero() ?></td>
            <td><?= $livro->getQtPaginas() ?></td>
        </tr>
    <?php endforeach ?>

</table>