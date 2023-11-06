<?php 

include_once(__DIR__ . "/../util//Connection.php");
include_once(__DIR__ . "/../model/time.php");

class TimeDAO {

    public function list()
    {
        $conn = Connection::getConnection();
        
        $sql = "SELECT * FROM time ORDER BY nome";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $jogador = $stm->fetchAll();

        return $this->mapDbBtoObject($jogador);
    }

    private function mapDbBtoObject(array $data)
    {
        $times = array();

        foreach($data as $reg) {
            $time = new time();
            $time->setId($reg["id"]);
            $time->setNome($reg["nome"]);
            $time->setEstado($reg["estado"]);
            $time->setDivisao($reg["divisao"]);

            array_push($times, $time);
        }

        return $times;
    }
}
