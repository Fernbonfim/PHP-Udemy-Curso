<?php

function incluirClasses($nomeClasse){
  //posso fazer desssa forma ou incluir esta funcao direto no spl_autoload_register, como esta ali embaixo

  if(file_exists($nomeClasse. ".php") === true){ // procurando o arquivo no diretorio.
    require_once($nomeClasse. ".php");
  }
}

            // aqui tenho dois exemplos do spl_autoload_register
spl_autoload_register("incluirClasses"); // nome da funcao que quero chamar

//ou

spl_autoload_register(function($nomeClasse){ // tbem posso colocar a função diretamente aqui. procurando a classe abstrata na pasta abstrata

  if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
    require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
  }
});

$carro = new DelRey();

$carro->acelerar(80);

$carro = new classeTeste();

$carro->testando();

?>
