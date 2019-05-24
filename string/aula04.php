<?php

  $nome = "fernando";
  $sobrenome = "bonfim";

  function teste(){

    global $nome;
    echo "$nome";

  }

  function teste2(){
    global $sobrenome;
    echo "$sobrenome";

  }
teste();
teste2();

 ?>
