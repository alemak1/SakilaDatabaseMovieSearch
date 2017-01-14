<?php

require_once('inc/database.php');
include('inc/header.php');

	try{
	
		$results = $db->prepare('select * from category');
		$results->execute();

		$categories = $results->fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $e){
		echo $e->getMessage();
	}


	if(isset($_GET['id']) && !empty($_GET['id'])){
		$specific_category_id = $_GET['id'];
	}

	

	if($specific_category_id != NULL){
			try{
				$film_category_results = $db->prepare('select film_category.category_id, film.title, film.release_year FROM film_category LEFT OUTER JOIN film ON film_category.film_id = film.film_id');
				$film_category_results->execute();
				$category_films = $film_category_results->fetchAll(PDO::FETCH_ASSOC);

			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

?>


	<section>


		<div class="container">
			<div class="col col-primary">
			<ol id="film-list">

              <?php

              foreach($categories as $category){
                echo '<li><a href="categories.php?id='
                  . $category['category_id'] .'"" title=""> '
                  . '<span style="display:initial" >' . $category['name'] .'</span>' 
                  . '</a></li>';
              }
                   
              ?>
          </ol>
			</div>

			
			<div class="col col-secondary">
				<div id="film-details  <?php echo ($specific_category_id != NULL) ? 'on':'off'; ?>">
				
					<?php

					foreach($category_films as $category_film){
				
						if($category_film['category_id'] == $specific_category_id ){
							echo "<div id='category-film-group' >";
							echo "<h3 id='title-heading'> Film Title: " . $category_film['title'] . " </h3>";
							echo "<h3 id='year-release-heading'> Year of Release: ". $category_film['release_year'] . "</h3> ";
							echo "</div>";
						}

						echo '<style>';
						echo ' #title-heading{ margin-bottom: -1em;}';
						echo '#year-release-heading{ margin-bottom: 1em;}';
						echo '.col-secondary{ max-height:25em; overflow-y:scroll;}';
						echo '</style>';

					}

					?>
								
				</div>

			</div>
 		

		</div>
		
	</section>



<?php

include('inc/footer.php');

?>