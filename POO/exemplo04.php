<?php

  class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

      $this->logradouro = $a;
      $this->numero = $b;
      $this->cidade = $c;
    }

    public function __destruct(){
      // var_dump("Destruir");
    }

    public function __toString(){

      return $this->cidade." , ".$this->logradouro.", ".$this->numero;
    }

  }

  $meuEndereco = new Endereco("Av das torres", "26", "Cuiabá"); //instanciando a classe Endereco em meu objeto $meuEndereco

  echo($meuEndereco);



 ?>
