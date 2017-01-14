
<!DOCTYPE html>
<html>

<?php

include('normalize.php');
include('basic_css.php');

?>

<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to the Sakila Database</title>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Bungee|Josefin+Slab|Rokkitt" rel="stylesheet">
	</head>



<body>

	<header>
		<div class="container">
			<div class="welcome-message">
          <h2>
          	<a href="../index.php">
            <span id="welcome-word1">Welcome </span>
            <span id="welcome-word2"> to</span>
            <span id="welcome-word3"> the</span>
            <span id="welcome-word4"> Sakila</span>
            <span id="welcome-word5"> Movie</span>
            <span id="welcome-word6"> Database</span>
            </a>
          </h2>
      </div>
      <div class="header-btn-set">
        <a href="../movie_store.php"> <button type="" class="btn">Available Stores</button></a>
        <a href="../categories.php"> <button type="" class="btn">Categories</button></a>
        <button type="" class="btn">Stores</button>
        <a href="../add_film.php"> <button type="" class="btn">Add a New Film</button></a>
      </div>
		</div>
	</header>
	