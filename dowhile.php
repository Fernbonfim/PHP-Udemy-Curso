<?php

$total = 300;
$desconto = 0.9;
  do {
    $valor =  $total *= $desconto;
    echo "Seu valor total é $valor";
    break;
} while ($total>200);
 ?>
