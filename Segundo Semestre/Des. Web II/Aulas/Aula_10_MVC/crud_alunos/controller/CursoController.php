<?php

include_once(__DIR__ . "/../dao/CursoDAO.php");

class CursoController {

    private CursoDAO $cursoDAO;

    // -- CONSTRUCT -- //
    public function __construct() 
    {
        $this->cursoDAO = new CursoDAO();
    }

    
    //-- FUNCTIONS -- //
    public function listar()
    {
        $alunos = $this->cursoDAO->list();
        return $alunos;
    }
}