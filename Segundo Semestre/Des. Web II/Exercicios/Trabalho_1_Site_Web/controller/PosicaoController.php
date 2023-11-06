<?php

include_once(__DIR__ . "/../dao/PosicaoDAO.php");

class PosicaoController {

    private PosicaoDAO $posicaoDAO;

    // -- CONSTRUCT -- //
    public function __construct() 
    {
        $this->posicaoDAO = new PosicaoDAO();
    }

    
    //-- FUNCTIONS -- //
    public function listar()
    {
        $posicoes = $this->posicaoDAO->list();
        return $posicoes;
    }
}
