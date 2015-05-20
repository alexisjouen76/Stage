<?php
  # config db
  define('DRIVER', 'mysql');
  define('HOST', 'mysql5');
  define('USER', 'domurat_web3');
  define('PWD', 'web3123');
  define('DATABASE', 'domurat_web3');
  # end config db
  
 
  
  try
  {
    global $dbh;
  	$dbh = new PDO(DRIVER.':host='.HOST.';dbname='.DATABASE, USER, PWD);
  	//$dbh -> exec('SET ENCODING utf8;');
  	$dbh -> exec('SET NAMES \'utf8\';');
  	
  }
  catch(PDOException $e)
  {
  	echo 'Błąd:'.$e->getMessage();
  }
  

?>