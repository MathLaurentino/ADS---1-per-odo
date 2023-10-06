<?php

class AlunoService {

    public function validarDados(Aluno $aluno): array
    {
        $erros = array();

        if (!$aluno->getNome()) {
            array_push($erros, "Informe o nome!");
        }
        if (!$aluno->getIdade()) {
            array_push($erros, "Informe a idade!");
        }
        if (!$aluno->getEstrangeiro()) {
            array_push($erros, "Informe se o aluno é estrangeiro!");
        }
        if (!$aluno->getCurso()) {
            array_push($erros, "Informe o curso!");
        }

        return $erros;
    }

}