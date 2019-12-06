<?php

  class Pessoa {

    public $nome = 'Rasmus Lerdof';
    private $senha = '123456';
    protected $idade = 48;

  public function verDados(){

    echo get_class($this) . "<br />"; // retorna o nome da classe do objeto

    echo $this->nome. "<br/>";
    echo $this->senha. "<br/>";
    echo $this->idade. "<br/>";
  }
}

  class Programador extends Pessoa{


  }
  $objeto = new Programador();

  $objeto->verDados();


 ?>
