<?php
include_once(__DIR__."/../dao/JogadorDAO.php");
include_once(__DIR__."/../model/Jogador.php");
include_once(__DIR__."/../service/JogadorService.php");



class JogadorController{
    private JogadorDao $jogadorDAO;
    private JogadorService $jogadorService;


    public function __construct(){
        $this->jogadorDAO = new JogadorDAO();
        $this->jogadorService = new JogadorService();
    }


    public function inserir(Jogador $jogador){
    
        $erros = $this->jogadorService->verificarDados($jogador);

        if (empty($erros)) {
            $this->jogadorDAO->inserirJogador($jogador);
        }
        
        return $erros;
    }


    public function alterar(Jogador $jogador)
    {
        $erros = $this->jogadorService->verificarDados($jogador);
        if (empty($erros)) {
            $this->jogadorDAO->update($jogador);
        }
        return $erros;
    }


    public function buscarPorId(int $idAluno)
    {
        return $this->jogadorDAO->getById($idAluno);
    }


    public function excluirPorId(int $idAluno)
    {
        $this->jogadorDAO->deleteById($idAluno);
    }


    public function listar(){
        return $this->jogadorDAO->listarJogador();
    }
}