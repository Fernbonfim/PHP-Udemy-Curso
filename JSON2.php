<?php

$json = '[{"nome":"Jao","idade":21},{"nome":"claudio","idade":45}]'; //decodificando o arquivo JSON

$data = json_decode($json, true);

var_dump($data);

?>
