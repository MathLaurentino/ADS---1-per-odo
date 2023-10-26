<?php

include_once(__DIR__ . "/../dao/AlunoDAO.php");
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../service/AlunoService.php");

class AlunoController {

    private AlunoDAO $alunoDAO;
    private AlunoService $alunoService;

    // -- CONSTRUCT -- //
    public function __construct()
    {
        $this->alunoDAO = new AlunoDAO();
        $this->alunoService = new AlunoService();
    }

    //-- FUNCTIONS -- //
    public function listar()
    {
        $alunos = $this->alunoDAO->list();
        return $alunos;
    }

    public function inserir(Aluno $aluno)
    {
        $erros = $this->alunoService->validarDados($aluno);
        if (empty($erros)) {
            $this->alunoDAO->insert($aluno);
        }
        return $erros;
    }

    public function alterar(Aluno $aluno)
    {
        $erros = $this->alunoService->validarDados($aluno);
        if (empty($erros)) {
            $this->alunoDAO->update($aluno);
        }
        return $erros;
    }

    public function buscarPorId(int $idAluno)
    {
        return $this->alunoDAO->getById($idAluno);
    }

    public function excluirPorId(int $idAluno)
    {
        $this->alunoDAO->deleteById($idAluno);
    }

}