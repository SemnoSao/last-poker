<?

  /**
   * Esta classe apresenta os atributos de um baralho
   */
  static class Baralho
  {
    private $arrayCartas;

    function __construct(argument)
    {
      
    }

    public function distribuirCartas(){

    }

    public function embaralhar(){

    }

  }

  /**
  * Esta classe representa um jogador da mesa
  */
  class Jogador
  {
    private $nome;
    private $idade;
    private $mao;

    function __construct($Nome, $Idade) {
      if (is_string($Nome))
        $this->nome = $Nome;
      else throw new Exception("Insira um Nome válido", 1);
      if ($idd>=18)
        $this->idade = $Idade;
      else throw new Exception("É necessário ser maior de idade para jogar", 2);
    }

    public function __toString() {

    }

    public function setMao() {

    }

  }

  /**
   * Esta classe apresenta os atributos de uma carta
   */
  class Carta
  {
      private $naipe;
      private $face;

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

  /**
  * Esta classe representa uma mão do jogo
  */
  class Mao
  {
    private $Cartas;

    function __construct(argument)
    {
      # code...
    }
  }

?>
