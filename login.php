<?php
  require_once('config/conexao.php');
  $executa = new conexao;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="password" name="senha" placeholder="Senha">
      <input type="submit" name="btn-login" value="Entrar">
    </form>
    <?php
        if(isset($_POST['btn-login'])):
         $executa->login($_POST['senha'], 'index.php');
        endif;
     ?>
  </body>
</html>
