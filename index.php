<?php
  session_start();
  if (!$_SESSION['sessionUserLogin']) {
    header("Location:login.php");
  }else {
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Agenda</title>

  </head>
  <body>
    <nav>
      <div class="container">
        <a href="index.php">Inicio</a>
        <a href="?p=contactos">Contactos</a>
        <a href="#">Sair</a>
      </div>
      <form class="form-search" action="index.html" method="post">
        <input type="submit" name="btn-pesquisar" value="Pesquisar" class="btn-search">
        <input type="search" name="" value="" class="input-search" placeholder="Pesquisar...">
      </form>
    </nav>
    <main>
      <?php
        if(isset($_GET['p'])){
           require("views/".$_GET['p'].".php");
        }else {
          require("views/dash.php");
        }
      ?>
    </main>
  </body>
</html>
<?php } ?>
