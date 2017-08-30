<html>
  <head>
    <title>Last Poker</title>
  </head>
  <body>
    <form action="game.php" method="get">
      <!--  Quantos Jogadores?
      <input type="number" name="Qnt_Jogadores" value="2" min="2" max="10"
        onkeydown="return false">
      <br>  -->
      <?php
        $qnt_players = $_GET["QntJogadores"];
        for ($i=0; $i < $qnt_players; $i++) {
          ?>
            Jogador <?php echo $i; ?><input type="text"
              name="Jogador<?php echo $i; ?>" placeholder="Insira um Nome" />
            Sua Idade<input type="number" name="idade" />
            <br />

          <?php
        }
      ?>
      <input type="submit" value="OK">
    </form>
  </body>
</html>
