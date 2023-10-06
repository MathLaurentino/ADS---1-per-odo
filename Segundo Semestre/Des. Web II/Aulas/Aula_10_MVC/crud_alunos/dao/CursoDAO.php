<?php 

include_once(__DIR__ . "/../util//Connection.php");
include_once(__DIR__ . "/../model/Curso.php");

class CursoDAO {

    public function list()
    {
        $conn = Connection::getConnection();
        
        $sql = "SELECT * FROM cursos ORDER BY nome";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $alunos = $stm->fetchAll();

        return $this->mapDbBtoObject($alunos);
    }

    private function mapDbBtoObject(array $data)
    {
        $cursos = array();

        foreach($data as $reg) {
            $curso = new Curso();
            $curso->setId($reg["id"]);
            $curso->setNome($reg["nome"]);
            $curso->setTurno($reg["turno"]);

            array_push($cursos, $curso);
        }

        return $cursos;
    }
}