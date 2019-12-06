<?php

    class Pessoa{

      public $nome; //Atributo

      public function falar(){//Método

        return "O Meu nome é ".$this->nome; //Dentro do método tenho q usar a pseudo var $this na var nome;

      }

    }

    $glaucio = new Pessoa;
    $glaucio ->nome = "Glaucio Daniel";
    echo $glaucio -> falar();
