<?
/**
 * Esta classe apresenta os atributos de um baralho
 */
static class Baralho
{
  private $cartas;

  function __construct(array $Cartas)
  {
    $this->cartas = $Cartas
  }

  public function darCarta($qntcartas = 4){
    
  }

  public function embaralhar(){
    $this->cartas->shuffle();
  }

}
