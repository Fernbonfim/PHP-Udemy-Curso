<?php

  abstract class animal{ // polimorfismo é ter o mesmo metodo que fazem coisas distintas em classes diferentes

    public function falar(){
      return "som";
    }

    public function mover(){
      return "anda";
    }
  }

  class cachorro extends animal{

    public function falar(){
      return "late";
    }
  }

  class gato extends animal{

    public function falar(){
      return "mia";
    }
    public function mover(){
      return "rastejando";
    }
  }

  class passaro extends gato{

      public function falar(){
        return "canta";
      }

      public function mover(){
        return "voar e ". parent::mover(); // aqui eu retorno o metodo da classe passaro e tambem retorno da classe pai "animal"
      }
  }

  $ave = new passaro();
  echo $ave->falar(). "<br>";
  echo $ave->mover(). "<br>";

  echo "--------------------------------<br>";

  $pluto = new cachorro();
  echo $pluto->falar(). "<br>";
  echo $pluto->mover(). "<br>";

  echo "--------------------------------<br>";

  $gato = new gato();
  echo $gato->falar(). "<br>";
  echo $gato->mover(). "<br>";
 ?>
