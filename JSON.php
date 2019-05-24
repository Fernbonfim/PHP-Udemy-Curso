<?php

$pessoas = array();

array_push($pessoas, array(
  'nome' => 'Jao',
  'idade' => 21
));

array_push($pessoas, array(
  'nome' => 'claudio',
  'idade' => 45
));

echo json_encode($pessoas); //codificando o arquivo PHP 
