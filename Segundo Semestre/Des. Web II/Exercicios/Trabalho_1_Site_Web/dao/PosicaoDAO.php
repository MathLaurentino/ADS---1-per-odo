<?php 

include_once(__DIR__ . "/../util//Connection.php");
include_once(__DIR__ . "/../model/Posicao.php");

class PosicaoDAO {

    public function list()
    {
        $conn = Connection::getConnection();
        
        $sql = "SELECT * FROM posicao ORDER BY nome";
        $stm = $conn->prepare($sql);    
        $stm->execute();
        $jogador = $stm->fetchAll();

        return $this->mapDbBtoObject($jogador);
    }

    private function mapDbBtoObject(array $data)
    {
        $posicoes = array();

        foreach($data as $reg) {
            $posicao = new Posicao();
            $posicao->setId($reg["id"]);
            $posicao->setNome($reg["nome"]);
            $posicao->setDescricao($reg["descricao"]);

            array_push($posicoes, $posicao);
        }

        return $posicoes;
    }
}
