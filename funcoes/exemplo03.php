<?php

$a = 10;

  function alteraValor(&$b){

    $b += 50;

    return $b;

  }

  echo alteraValor($a);
  echo "<br>";
  echo $a;
    echo "<br>";
  echo alteraValor($a);
  echo "<br>";
  echo $a;


 ?>
