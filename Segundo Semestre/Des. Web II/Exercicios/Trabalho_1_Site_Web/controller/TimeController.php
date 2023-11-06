<?php

include_once(__DIR__ . "/../dao/TimeDAO.php");

class TimeController {

    private TimeDAO $timeDAO;

    // -- CONSTRUCT -- //
    public function __construct() 
    {
        $this->timeDAO = new TimeDAO();
    }

    
    //-- FUNCTIONS -- //
    public function listar()
    {
        $alunos = $this->timeDAO->list();
        return $alunos;
    }
}
