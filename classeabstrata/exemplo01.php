<?php



abstract class Tela{

  abstract public function BotaoChute($botao);
  abstract public function BotaoToque($botao);
  abstract public function BotaoLancamento($botao);

}

class Pegar extends Tela{

   public function BotaoChute($botao){
    return "{$botao} O Botao pressionado foi";
  }

  public function BotaoToque($botao){
    return "{$botao} O Botao pressionado foi";
  }

  public function BotaoLancamento($botao){
    return "{$botao} O Botao pressionado foi";
  }
}

$jogo = new Pegar;
echo $jogo->BotaoToque("B");
 ?>
