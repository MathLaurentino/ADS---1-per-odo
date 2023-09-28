<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Aluno.php");

class AlunoDAO {

    public function list()
    {
        $conn = Connection::getConnection();
        
        $sql = "SELECT a.*, c.nome AS nome_curso FROM alunos AS a JOIN cursos AS c ON c.id = a.id_curso";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $alunos = $stm->fetchAll();

        return $this->mapDbBtoObject($alunos);
    }


    private function mapDbBtoObject(array $data) 
    {
        $alunos = array();
        foreach($data as $reg) {
            $aluno = new Aluno();
            $aluno->setId($reg["id"]);
            $aluno->setNome($reg["nome"]);
            $aluno->setIdade($reg["idade"]);
            $aluno->setEstrangeiro($reg["estrangeiro"]);

            $curso = new Curso();
            $curso->setId($reg["id_curso"]);
            $curso->setNome($reg["nome_curso"]);
            
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }

        return $alunos;
    }
}