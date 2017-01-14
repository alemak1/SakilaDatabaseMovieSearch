<?php

require_once('inc/database.php');
include('inc/query_films.php');
include('inc/header.php');

?>

	<section>


		<div class="container">
			<div class="col col-primary">
			<ol id="film-list">

              <?php

              foreach($films as $film){
                echo '<li><a href="index.php?id='
                  . $film['film_id'] .'"" title=""> '
                  . '<span style="display:initial" >' . $film['title'] . '</span>' 
                  . '<p style="display:none" class="film-description"> '. $film['description']  .' </p>'
                  . '</a></li>';
              }
                   
              ?>
          </ol>
			</div>

		
			<div class="col col-secondary">
				<div id="film-details  <?php echo ($detail_film != NULL) ? 'on':'off'; ?>">

					<h2> Title: <?php echo $detail_film['title']; ?> </h2>
					<h3> Year of Release: <?php echo $detail_film['release_year']; ?></h3>
					<h3> Rating: <?php echo $detail_film['rating']; ?></h3>
					<h4> Description: <?php echo $detail_film['description']; ?> </h4>
								
				</div>

			</div>

		</div>
		
	</section>

<?php

include('inc/footer.php');	

?>
