<?
class Mao
{
  private $cartas;

  public function __construct(array $Cartas){
    $this->cartas = $Cartas;
  }

  public function ordenarCartas() {
    $this->sortByDesc(function($card)
       {
           return $card->getValue();
       });
  }

  public function transAs() {

  }

  public function valorMao() {

    if ($this->isStraightFlush()) {
            return "Straight Flush"
    }
    elseif ($this->isQuadra()) {
            return "Quadra"
    }
    elseif ($this->isFullHouse()) {
            return "Full House"
    }
    elseif ($this->isFlush()) {
            return "Flush"
    }
    elseif ($this->isSequencia()) {
            return "Sequência"
    }
    elseif ($this->isTrinca()) {
            return "Trinca"
    }
    elseif ($this->isDoisPares()) {
            return "Dois Pares"
    }
    elseif ($this->isPar()) {
            return "Par"
    }
    elseif ($this->isCartaAlta()) {
            return "Carta Alta"
    }

  }

  private function isCartaAlta() {
    return true;
  }

  private function isPar() {

  }
}
