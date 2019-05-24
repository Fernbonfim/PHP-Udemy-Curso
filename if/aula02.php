<?php
// date_default_timezone_set('America/Cuiaba');
// echo date("F d m Y");
//
// echo "Última Modificação: " .date("F d Y H:i:s", getlastmod()); //F
$diaDaPostagem = date("d");
echo "$diaDaPostagem";

switch ($diaDaPostagem){
  case 0;
    echo "Domingo";
    break;

  case 1;
    echo "Segunda";
    break;

  case 2;
  echo "Terça";
  break;

  case 3;
  echo "Quarta";
  break;
}


 ?>
