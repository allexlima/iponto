<?php

class Model_icolab{

  private $conn;

  function __contruct($connection){
    $this->conn = $connection;
  }

  public function login($email, $password){
    $query = $this->conn->prepare("SELECT colab_id FROM i_colab WHERE colab_email = (?) AND colab_senha = (?);");
    $query->execute(array($email, $password));
    $result = $query->fetch();
    return (!$result) ? -1 : $result[0];
  }

}

?>
