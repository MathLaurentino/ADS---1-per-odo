<?php

require_once(__DIR__ . "/../service/LoginService.php");
require_once(__DIR__ . "/../dao/UsuarioDAO.php");

class LoginController {

    private LoginService $loginService;
    private UsuarioDAO $usuarioDAO;

    public function __construct() {
        $this->loginService = new LoginService();
        $this->usuarioDAO = new UsuarioDAO();     
    }

    public function logar($usuario, $senha) {
        $erros = $this->loginService->validarDados($usuario, $senha);

        if(!empty($erros)) {
            return $erros;
            exit;
        }
        
        $usuario = $this->usuarioDAO->findByLoginSenha($usuario, $senha);
        if(! $usuario) {
            return array("Usuário ou Senha inválidos!");
            exit;
        }

        $this->loginService->salvarUsuarioSessao($usuario);

        return array();
    }

    public function deslogar() {
        $this->loginService->excluirUsuarioSessao();
    }

    public function verificarUsuarioLogado() {
        return ($this->loginService->getNomeUsuarioSessao());
    }

    public function getNomeUsuario() {
        return $this->loginService->getNomeUsuarioSessao();
    }
}
