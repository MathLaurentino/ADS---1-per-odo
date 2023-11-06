<?php

class Time {

    private ?int $id;
    private ?string $nome;
    private ?string $estado;
    private ?string $divisao;
    

    public function __toString()
    {
        return $this->nome;
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

    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getDivisao()
    {
        return $this->divisao;
    }
    public function setDivisao($divisao)
    {
        $this->divisao = $divisao;

        return $this;
    }
}

?>