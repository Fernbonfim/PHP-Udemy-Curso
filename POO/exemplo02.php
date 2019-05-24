<?php

  class Carro{ //classe define os metodos e atributos que serao compartilhados com o meu objeto
             //Atributos
    private $modelo;
    private $motor;
    private $ano;

            //Métodos
    public function getModelo(){
      return $this->modelo; //Retornando o atributo(variavel)
    }

    public function setModelo($valor1){ //o parametro aqui é quem eu quero mudar
      $this->modelo = $valor1;
    }

    public function getMotor():float{
      return $this->motor; //Retornando o atributo(variavel)
    }

    public function setMotor($valor2){ //o parametro aqui é quem eu quero mudar
      $this->motor = $valor2;
    }

    public function getAno():int{
      return $this->ano; //Retornando o atributo(variavel)
    }

    public function setAno($valor3){ //o parametro aqui é quem eu quero mudar
      $this->ano = $valor3;
    }

    public function exibir(){ //funcao que tras os valores armazenados nos metodos
      return array(
        "modelo"=>$this->getModelo(),
        "motor"=>$this->getMotor(),
        "ano"=>$this->getAno()
      );
    }

  }

  $gol = new Carro(); //setando os valores dentro dos "set´s". criei o objeto $gol a partir da classe Carro.
  $gol->setModelo("Gol GT"); // dando valores aos meu atributos
  $gol->setMotor("1.6");
  $gol->setAno("2017");

  var_dump($gol->exibir());


 ?>
