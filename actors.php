<?php

require_once('inc/database.php');
include('inc/query_films.php');
include('inc/header.php');

	try{
	
		$results = $db->prepare('SELECT * FROM film_actor');
		$results->execute();
		$actors = $results->fetchAll(PDO::FETCH_ASSOC);

	}catch(Exception $e){
		echo $e->getMessage();
	}

?>


	<section>


		<div class="container">
			<div class="col col-primary">
			<ol id="film-list">

              <?php

              foreach($actors as $actor){
                echo '<li><a href="actors.php?id='
                  . $actor['actor_id'] .'"" title=""> '
                  . '<span style="display:initial" >' . $actor['first_name'] . ' ' . $actor['last_name']  .'</span>' 
                  . '</a></li>';
              }
                   
              ?>
          </ol>
			</div>

		
			<!-- <div class="col col-secondary">
				<div id="film-details  <?php echo ($detail_film != NULL) ? 'on':'off'; ?>">

					<h2> Title: <?php echo $detail_film['title']; ?> </h2>
					<h3> Year of Release: <?php echo $detail_film['release_year']; ?></h3>
					<h3> Rating: <?php echo $detail_film['rating']; ?></h3>
					<h4> Description: <?php echo $detail_film['description']; ?> </h4>
								
				</div> -->

			</div>

		</div>
		
	</section>



<?php

include('inc/footer.php');

?>