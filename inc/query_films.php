<?php

 try{
    $results = $db->query('select * from film');
    $films = $results->fetchAll(PDO::FETCH_ASSOC);

  }catch(Exception $e){
    echo $e->getMessage();
  }
  
  if(isset($_GET['id']) && !empty($_GET['id'])){
  	$film_id = $_GET['id'];
  	$detail_film = $films[$film_id];

  }



?>