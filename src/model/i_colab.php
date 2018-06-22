<?php

class ModelColaboradores{

    private $conn;

    function __construct($connection){
        $this->conn = $connection;
    }

    public function login($email, $password){
        $sql = "SELECT colab_id FROM i_colab WHERE colab_email = (?) AND colab_senha = (?)";
        $query = $this->conn->prepare($sql);
        $query->execute(array($email, $password));
        $result = $query->fetch();
        return (!$result) ? -1 : $result[0];
    }

    public function create($name, $email, $password, $post=Null, $admin='false'){
        $sql = "INSERT INTO i_colab (colab_nome, colab_email, colab_senha, colab_funcao, colab_supervisor) VALUES ((?), (?), (?), (?), (?)) RETURNING colab_id";
        $query = $this->conn->prepare($sql);
        $query->execute(array($name, $email, $password, $post, $admin));
        $result = $query->fetch();
        return (!$result) ? -1 : $result[0];
    }

    public function delete($id){
        $sql = "DELETE FROM i_colab WHERE colab_id = (?)";
        $query = $this->conn->prepare($sql);
        $query->execute(array($id));
    }

    public function get_all(){
        $sql = "SELECT colab_id, colab_nome, colab_email, colab_funcao FROM i_colab WHERE colab_supervisor <> (true) ORDER BY colab_id DESC";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function get_user($id){
        $sql = "SELECT colab_nome, colab_email, colab_funcao FROM i_colab WHERE colab_id = (?);";
        $query = $this->conn->prepare($sql);
        $query->execute(array($id));
        $result = $query->fetch();
        return (!$result) ? -1 : $result;
    }

    public function is_admin($id){
        $sql = "SELECT colab_id FROM i_colab WHERE colab_id = (?) AND colab_supervisor = (true)";
        $query = $this->conn->prepare($sql);
        $query->execute(array($id));
        $result = $query->fetch();
        return (!$result) ? 0 : 1;
    }

    public function update($id, $name="", $email="", $password="", $post=""){
        if(empty($name) && empty($email) && empty($password) && empty($post))
            return -1;

        $sql = "UPDATE i_colab SET ";
        $sql_add = array();
        $values = array();

        if(!empty($name)){
            array_push($sql_add, "colab_nome = (?)");
            array_push($values, $name);
        }
        if(!empty($email)){
            array_push($sql_add, "colab_email = (?)");
            array_push($values, $email);
        }
        if(!empty($password)){
            array_push($sql_add, "colab_senha = (?)");
            array_push($values, $password);
        }
        if(!empty($post)){
            array_push($sql_add, "colab_funcao = (?)");
            array_push($values, $post);
        }

        array_push($values, $id);

        $sql .= implode(',', $sql_add)." WHERE colab_id = (?)";

        $query = $this->conn->prepare($sql);
        $query->execute($values);
    }

}

?>
