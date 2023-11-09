<?php 

class JogadorService{
    
    function verificarDados(Jogador $jogador): array{
        $erros = array();

        if (!$jogador->getNome()) {
            array_push($erros, "Informe o nome!");
        }
        if (!$jogador->getIdade()) {
            array_push($erros, "Informe a idade!");
        }
        if (!$jogador->getPerna_dominante()) {
            array_push($erros, "Informe a perna dominante!");
        }
        if (!$jogador->getPosicao()) {
            array_push($erros, "Informe a posição!");
        }
        if (!$jogador->getTime()) {
            array_push($erros, "Informe o time!");
        }
        
        return $erros;
    }
}