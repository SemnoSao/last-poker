<?
/**
* Esta classe representa um jogador da mesa
*/
class Jogador
{
  private $nome;
  private $idade;
  private $mao;

  public function __construct($Nome, $Idade) {
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
