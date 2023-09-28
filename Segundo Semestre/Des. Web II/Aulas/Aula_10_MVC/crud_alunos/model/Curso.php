<?php

class Curso {

    private ?int $id;
    private ?string $nome;
    private ?string $turno;

    public function __toString()
    {
        return $this->nome;
    }
    
    //-- GETTERS AND SETTERS --//

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getTurno()
    {
        return $this->turno;
    }
    public function setTurno($turno)
    {
        $this->turno = $turno;
        return $this;
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
}

?>