<?php

  $pessoa = array(

    'nome' => 'Fernando',
    'idade' => 20
  );

  foreach ($pessoa as $key => &$value) {

    if (gettype($value) === 'integer') $value += 10;

    echo $value .'<br>';

  }

  print_r ($pessoa);

 ?>
