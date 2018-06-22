<?php

class ModelPontos{

    private $conn;

    function __construct($connection){
        $this->conn = $connection;
    }

    public function is_locked($id){
        $sql = "SELECT ponto_id FROM i_ponto WHERE ponto_user = (?) AND ponto_is_fechado = (false)";
        $query = $this->conn->prepare($sql);
        $query->execute(array($id));
        $result = $query->fetch();
        return (!$result) ? False : $result[0];

    }

    public function pclock_open($id){
        $sql = "INSERT INTO i_ponto (ponto_user, ponto_inicio) VALUES ((?), (?))";
        if(!$this->is_locked($id)){
            $query = $this->conn->prepare($sql);
            $query->execute(array($id, date("Y-m-d H:i:s")));
            return True;
        }
    }

    public function pclock_close($id){
        $sql = "UPDATE i_ponto SET ponto_fim = (?), ponto_is_fechado = (true) WHERE ponto_user = (?) AND ponto_is_fechado = (false)";
        $open_pclock = $this->is_locked($id);
        if($open_pclock){
            $query = $this->conn->prepare($sql);
            $query->execute(array(date("Y-m-d H:i:s"), $id));
            return True;
        }
    }

    public function get_all($id){
        $sql = "SELECT *, replace(to_char((EXTRACT(EPOCH FROM ponto_fim - ponto_inicio)/3600)::integer, '00') || ':' || to_char((EXTRACT(EPOCH FROM ponto_fim - ponto_inicio)/60)::integer, '00') || ':' || to_char((EXTRACT(EPOCH FROM ponto_fim - ponto_inicio))::integer, '00'), ' ', '') AS hours FROM i_ponto WHERE ponto_user = (?) ORDER BY ponto_id DESC";
        $query = $this->conn->prepare($sql);
        $query->execute(array($id));
        return $query->fetchAll();
    }

}

?>
