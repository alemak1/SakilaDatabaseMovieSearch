
<?php

 //comment out or remove before going to production server
//ini_set('display_errors','On');

try{
  $db = new PDO('sqlite:database.db');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
}catch(Exception $e){
  echo 'Sorry, the connection was not successful';
  $e->getMessage();
  
}


?>