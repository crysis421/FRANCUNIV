<?php
  define('host','localhost');
  define('db_name','siteweb');
  define('user','root');
  define('pass','');

  try{
    $db = new PDO("mysql:host=" .host. ";dbname=".db_name, user,pass );
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo"Connection ok "
  } catch (PDOException $e){
    echo $e;
  }