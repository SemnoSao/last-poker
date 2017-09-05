<?
/**
 * Esta classe apresenta os atributos de um baralho
 */
static class Baralho
{
  private $cartas;

  function __construct($Cartas = NULL)
  {
    if ($Cartas = NULL) {
      $this->cartas = $this->deckPadrao();
    }
    $this->cartas = $Cartas
  }

  public function darCartas($qntcartas = 5){
    $array = [];
    for ($i=0; $i < $qntcartas; $i++) {
      $array[] = $this->cartas->shift();
    }
  }

  public function embaralhar(){
    $this->cartas->shuffle();
  }

  /*private function deckPadrao(){
    $
    for ($i=0;$i<4;i++)
      for ($i=1; $i<=13 ; $i++) {
         new Carta($i,$j)
      }
    return
  }*/

}
