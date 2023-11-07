<?php

//Configurar essas variáveis de acordo com o seu ambiente
define("DB_HOST", "localhost");
define("DB_NAME", "futebol");
define("DB_USER", "root");
define("DB_PASSWORD", "");

//Configurar variavel do diretorrio base da aplicação 
define("BASE_URL","/trabalho");
define("LISTAGEM_JOGADORES", BASE_URL . "/view/jogadores/listar.php");
define("CADASTRO_JOGADOR", BASE_URL . "/view/jogadores/inserir.php");
define("TIMES_URL", BASE_URL . "/");