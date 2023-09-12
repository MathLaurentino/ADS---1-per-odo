<?php 
 
class Pessoa {

    private $nome;
    private $sobrenome;

    public function __construct(string $nome="", string $sobrenome="")
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function getNomeCompleto()
    {
        return $this->nome . " " . $this->sobrenome;
    }


    // GETTER AND SETTER
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }
}


$pessoa1 = new Pessoa();
$pessoa1->setNome("Matheus");
$pessoa1->setSobrenome("Laurentino");
echo $pessoa1->getNomeCompleto();

echo "<br>";

$pessoa2 = new Pessoa();
$pessoa2->setNome("Marcos")
        ->setSobrenome("Barbosa");
echo $pessoa2->getNomeCompleto();

echo "<br>";

$pessoa3 = new Pessoa("Neymar", "jr");
echo $pessoa3->getNomeCompleto();

