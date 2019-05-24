<?php

  $nome = "Uma vez Flamengo, sempre flamengo";

  $q = strpos ($nome, "Flamengo");
  $palavra = "Flamengo";

  // $nome3 = substr ($nome, 0, $q);

  $nome2 = substr ($nome, $q+ strlen($palavra), strlen($nome)); //retorna a partir de flamengo a qtde de posicao.

  var_dump ("$nome2");


 ?>
