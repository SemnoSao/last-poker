<?
/**
 * Esta classe apresenta os atributos de uma carta
 */
class Carta
{
    private $naipe;
    private $face;
    private $naipePadrao = [
      1=>"Ás",
      2=>"Dois",
      3=>"Três",
      4=>"Quatro",
      5=>"Cinco",
      6=>"Seis",
      7=>"Sete",
      8=>"Oito",
      9=>"Nove",
      10=>"Dez",
      11=>"Valete",
      12=>"Dama",
      13=>"Rei",
    ];

    public function __construct($Naipe, $Face) {
            $this->naipe   = $Naipe;
            $this->face = $Face;
    }

    public function __toString() {
            return $this->face . ' de ' . $this->naipe;
    }

    public function getFace() {
            return $this->face;
    }

    public function getNaipe() {
            return $this->naipe;
    }

}
