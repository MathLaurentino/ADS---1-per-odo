<?php
include_once(__DIR__."/Time.php");
include_once(__DIR__."/Posicao.php");

class Jogador{
    private ?int $id;
    private ?String  $nome;
    private ?int $idade;
    private ?int $perna_dominante;
    private ?Time $time;
    private ?Posicao $posicao;

    
    public function __construct()
    {
        $this->time = null;
        $this->posicao = null;
        $this->id = 0;
        $this->perna_dominante = 0;
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getPosicao() 
    {
        return $this->posicao;
    }
    public function setPosicao(Posicao $posicao)
    {
        $this->posicao = $posicao;
    }

    public function getTime() 
    {
        return $this->time;
    }
    public function setTime(Time $time)
    {
        $this->time = $time;
    }

    public function getPerna_dominante()
    {
        return $this->perna_dominante;
    }
    public function getPerna_dominante_form()
    {
        return ($this->perna_dominante == 1) ? "Destro" : "Canhoto";
    }
    public function setPerna_dominante($perna_dominante)
    {
        $this->perna_dominante = $perna_dominante;

        return $this;
    }
}
?>