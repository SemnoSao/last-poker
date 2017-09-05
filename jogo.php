<html>
  <head>
    <title>Last Poker - Let's Play</title>
  </head>
  <body>
    <?php
      include 'Baralho.php';
      include 'Carta.php';
      include 'Jogador.php';

      $numJogadores = 4;
      $jogadores = [];

      $novoBaralho = [];
      for ($i=0;$i<4;i++)
        for ($i=2; $i<=14 ; $i++) {
           $novoBaralho[] = new Carta($i,$j);
      }

      $Baralho = new Baralho($novoBaralho);

      for ($i=0; $i < $numJogadores; $i++) {
        $jogadores[] = 
      }

    ?>
  </body>
</html>
