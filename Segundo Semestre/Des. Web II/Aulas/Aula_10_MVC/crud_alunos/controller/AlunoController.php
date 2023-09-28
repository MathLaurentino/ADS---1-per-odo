<?php

include_once(__DIR__ . "/../dao/AlunoDAO.php");

class AlunoController {

    private AlunoDAO $alunoDAO;

    // -- CONSTRUCT -- //
    public function __construct()
    {
        $this->alunoDAO = new AlunoDAO();
    }

    //-- FUNCTIONS -- //
    public function listar()
    {
        $alunos = $this->alunoDAO->list();
        return $alunos;
    }

}