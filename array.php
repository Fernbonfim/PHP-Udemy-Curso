<?php

$pessoas = array();

array_push($pessoas, array(
  'nome' => 'Jao',
  'idade' => '21',
));

array_push($pessoas, array(
  'nome' => 'claudio',
  'idade' => '45',
));

print_r ($pessoas[1]);

$cores = array(0=>'vermelho', 1=>'verde', 2=>'azul');

echo $cores[0]; // para acessar o indice do array, basta indica-lo entre colchetes

$pessoa = array();

$pessoa['nome'] = 'maria';
$pessoa['rua'] = 'candelaria';
$pessoa['bairro'] = 'mato grosso';

echo $pessoa['nome'];

foreach ($variable as $key => $value) {
  // code...
}
