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
        
    }

    public function deslogar() {
        
    }

    public function verificarUsuarioLogado() {
        
    }

    public function getNomeUsuario() {
        
    }
}