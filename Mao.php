<?
class Mao
{
  private $cartas;
  private $kicker;
  private $lowEnd;

  public function __construct(array $Cartas){
    $this->cartas = $Cartas;
  }

  public function ordenarCartas() {
    $this->sortByDesc(function($card)
       {
           return $card->getValue();
       });
  }

  /*public function transAs() {

  }*/

  public function valorMao() {

    $this->ordenarCartas();
    $kicker = end($this->cartas);
    $lowEnd = $this->cartas[0];

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
    $verifica = [];
    $count = 0;
    foreach ($this->cartas as $Carta) {
      if (!empty($verifica[$Carta->getFace()]))
        $count++;
      $verifica[$Carta->getFace()] = 1;
    }

    return ($count === 1);
  }

  private function isDoisPares() {
    $verifica = [];
    $verificaPar = [];
    foreach ($this->cartas as $Carta) {
      if (!empty($verifica[$Carta->getFace()]))
        $verificaPar[$Carta->getFace()] = 1;
      $verifica[$Carta->getFace()] = 1;
    }

    return (count($verificaPar)>1)
  }

  private function isTrinca() {
    /*$verifica = [];
    foreach ($this->cartas as $Carta) {
      if (!empty($verifica[$Carta->getFace()]))
        $verifica[$Carta->getFace()]++;
      $verifica[$Carta->getFace()] = 1;
    }
    foreach ($verifica as $key) {
      if ($key === 3)
        return true;
    }
    return false;*/
    $verifica = [];
    $count = 0;
    foreach ($this->cartas as $Carta) {
      if (!empty($verifica[$Carta->getFace()]))
        $count++;
      $verifica[$Carta->getFace()] = 1;
    }

    return ($count === 2);
  }

  private function isSequencia() {
    $count = 0;
    for ($i=1; $i < 5; $i++) {
      if ($this->cartas[$i]->getFace() == ($this->cartas[--$i]->getFace() + 1))
        $count++;
    }

    return ($count === 4);
  }

  private function isFlush() {
    $verifica = [];
    $count = 0;
    foreach ($this->cartas as $carta) {
      if(!empty($verifica[$carta->getNaipe()])
        $count++;
      $verifica[$carta->getNaipe()] = true;
    }

    return ($count === 4);
  }

  private function isFullHouse() {
     return ($this->isPar() && $this->isTrinca());
  }

  private function isQuadra() {
    $verifica = [];
    $count = 0;
    foreach ($this->cartas as $Carta) {
      if (!empty($verifica[$Carta->getFace()]))
        $count++;
      $verifica[$Carta->getFace()] = 1;
    }

    return ($count === 3) ;
  }

  private function isStraightFlush() {
    return ($this->isFlush() && $this->isSequencia())
  }

  private function getKicker() {
    return $this->kicker->getFace();
  }

  private function getLowEnd() {
    return $this->lowEnd->getFace();
  }

}
