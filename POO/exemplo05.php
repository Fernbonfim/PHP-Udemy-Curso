<?php

  /**
   *
   */
  interface Veiculo {

    public function acelerar($velocidade); // aqui eu obrigo ao programador impementar esses atributos
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
  }

  class Civic implements Veiculo{ // aqui na classe sou obrigado a colocar esses atributos acima

    public function acelerar($velocidade){
      echo "O Veiculo acelerou ate " . $velocidade . " km/h";
    }

    public function frenar($velocidade){
      echo "O Veiculo frenou ate " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha){
      echo " O Veiculo colocou a ". $marcha. "° marcha";
    }
  }

  $carro = new Civic();
  $carro->acelerar(5)


 ?>
