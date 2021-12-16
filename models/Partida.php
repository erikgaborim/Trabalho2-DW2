<?php
  class Partida extends Model {
    protected $tabela="partida";
    protected $ordem="id";
  
    public function getByTipo($tipo) {
      $sql = "SELECT * FROM $this->tabela WHERE tipo = :tipo";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":tipo", $tipo);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetch();
      return $dados;
    }
  }
 ?>
