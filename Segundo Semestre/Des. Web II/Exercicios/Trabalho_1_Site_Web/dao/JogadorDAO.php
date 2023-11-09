<?php
include_once(__DIR__."/../util/Connection.php");
include_once(__DIR__."/../model/Jogador.php");
include_once(__DIR__."/../model/Time.php");

$conn= new Connection();

class JogadorDao{


    function inserirJogador(Jogador $jogador)
    {
        $conn=Connection::getConnection();
        $sql="INSERT INTO jogador (nome, idade, perna_dominante, fk_posicao, fk_time)"
            ." VALUES(?,?,?,?,?)";

        $sta=$conn->prepare($sql);
        $sta->execute(array(
            $jogador->getNome(), 
            $jogador->getIdade(), 
            $jogador->getPerna_dominante(),
            $jogador->getPosicao()->getId(),
            $jogador->getTime()->getId()
        ));
    }


    function listarJogador()
    {
        $conn=Connection::getConnection();

        $sql="SELECT j.*, t.nome AS nome_time, p.nome AS posicao". 
            " FROM jogador AS j".
            " JOIN time AS t ON j.fk_time = t.id".
            " JOIN posicao as p ON j.fk_posicao = p.id";

        $sta=$conn->prepare($sql);
        $sta->execute();

        $result=$sta->fetchAll();
        return $this->mapJogadores($result);
    }


    public function getById(int $idJogador)
    {
        $conn = Connection::getConnection();
        
        $sql="SELECT j.*, t.nome AS nome_time, p.nome AS posicao". 
            " FROM jogador AS j".
            " JOIN time AS t ON j.fk_time = t.id".
            " JOIN posicao as p ON j.fk_posicao = p.id".
            " WHERE j.id = ?";

        $stm = $conn->prepare($sql);    
        $stm->execute(array($idJogador));
        $result = $stm->fetchAll();

        $jogador = $this->mapJogadores($result);

        if ($jogador) 
            return $jogador[0];
        else 
            return null;
    }


    public function update(Jogador $jogador) 
    {
        $conn = Connection::getConnection();
        
        $sql = "UPDATE jogador SET nome = ?, idade = ?," . 
                " perna_dominante = ?,".
                " fk_posicao = ?, fk_time = ?" . 
                " WHERE id = ?";
        
        $stm = $conn->prepare($sql);    
        $stm->execute(array(
                $jogador->getNome(), 
                $jogador->getIdade(), 
                $jogador->getPerna_dominante(),
                $jogador->getPosicao()->getId(),
                $jogador->getTime()->getId(),
                $jogador->getId()
            )
        );
    }


    public function deleteById(int $idJogador)
    {
        $conn = Connection::getConnection();

        $sql = "DELETE FROM jogador WHERE id = ?";
        $stm = $conn->prepare($sql);    
        $stm->execute(array($idJogador));
    }


    function mapJogadores(array $array)
    {
        $jogadores=array();
        foreach($array as $ar){
            $jogador=new Jogador();
            $jogador->setId($ar["id"]);
            $jogador->setNome($ar["nome"]);
            $jogador->setIdade($ar["idade"]);
            $jogador->setPerna_dominante($ar["perna_dominante"]);

            $time = new Time();
            $time->setId($ar["fk_time"]);
            $time->setNome($ar["nome_time"]);

            $posicao = new Posicao();
            $posicao->setId($ar["fk_posicao"]);
            $posicao->setNome($ar["posicao"]);

            $jogador->setTime($time);
            $jogador->setPosicao($posicao);

           array_push($jogadores, $jogador);
        }
        return $jogadores;
    }
}