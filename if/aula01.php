<?php

  $suaIdade = 13;

  $piorIdade = 60;
  $melhorIdade = 14;


  if ($suaIdade >= $piorIdade ){

    echo "Vc esta na pior idade";

  } elseif ($suaIdade <= $melhorIdade) {

    echo "Vc esta na melhor idade";

  } elseif($suaIdade >= $melhorIdade and $suaIdade <= $piorIdade ){
    echo "Vc esta na media idade";
  }

 ?>
