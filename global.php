<pre>

  <?php

  /*
  global variaveis  (variáveis do sistema)

  $_SERVER
  */
  //print_r($_SERVER);

  $_SESSION['sessaoUserLogado'] = 1;
  if ($_SESSION['sessaoUserLogado']) {
    echo "logado";
  }
  unset()

  ?>
</pre>
