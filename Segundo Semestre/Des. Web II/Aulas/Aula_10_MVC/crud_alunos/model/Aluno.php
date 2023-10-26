<?php

include_once(__DIR__ . "/Curso.php");

class Aluno {

    private ?int $id;
    private ?String $nome;
    private ?int $idade;
    private ?String $estrangeiro;
    private ?Curso $curso;

    // -- CONSTRUCT -- //
    public function __construct()
    {
        $this->curso = null;
        $this->id = 0;
    }

    public function getEstrangeiroDesc() 
    {
        if ($this->estrangeiro == "S") 
            return "Sim";
        else if ($this->estrangeiro == "N")
            return "Não";
        else 
            return "";
    }


    //-- GETTERS AND SETTERS --//
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

    public function getEstrangeiro()
    {
        return $this->estrangeiro;
    }
    public function setEstrangeiro($estrangeiro)
    {
        $this->estrangeiro = $estrangeiro;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    public function __toString()
    {
        return "Nome: " . $this->nome . " Idade:" . $this->idade . " Estrangeiro: " . $this->estrangeiro;
    }

}

?>