<html>
  <head>
    <title>Last Poker - Players</title>
  </head>
  <body>
    <form action="jogo.php" method="get">
      <!--  Quantos Jogadores?
      <input type="number" name="Qnt_Jogadores" value="2" min="2" max="10"
        onkeydown="return false">
      <br>  -->
      <?php
        $qnt_players = $_GET["QntJogadores"];
        for ($i=1; $i <= $qnt_players; $i++) {
          ?>
            Jogador <?php echo $i; ?>
            <input type="text" name="nomeJogador<?php echo $i; ?>"
              placeholder="Insira um Nome" />
            Sua Idade
            <input type="number" name="idadeJogador<?php echo $i; ?>" />
            <br />
      <?php } ?>
      <input type="number" name="QntJogadores"
        value="<?php echo $qnt_players ?>" hidden>
      <input type="submit" value="OK">
    </form>
  </body>
</html>
