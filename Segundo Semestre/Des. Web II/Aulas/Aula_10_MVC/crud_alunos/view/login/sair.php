<?php 
//Pagina para sair da aplicação (logoff do usuário)

include_once(__DIR__ . "/../../controller/LoginController.php");

$loginCont = new LoginController();
$loginCont->deslogar();
header("location: " . URL_BASE . "/view/login/login.php");