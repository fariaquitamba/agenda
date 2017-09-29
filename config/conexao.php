<?php

class conexao {
  var $conecta;
  function conexao (){
    $this->conecta = new mysqli("localhost", "root", "", "agenda");
    return $this->conecta;
  }

  function login ($password, $url){
  	$sql = $this->conecta->query("SELECT * FROM tbllogin WHERE senha=$password") or die ($this->conecta->error);
  	
  	var_dump(mysql_fetch_array($sql));
  }
}

$con = new conexao;
