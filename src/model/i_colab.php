<?php

class Model_icolab{

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

  public function is_admin($email){
    $query = $this->conn->prepare("SELECT colab_id FROM i_colab WHERE colab_email = (?) AND colab_supervisor = (true)");
    $query->execute(array($email));
    $query->execute();
    $result = $query->fetch();
    return (!$result) ? 0 : 1;
  }



}

?>
