<?php

require_once('inc/database.php');
include('inc/query_films.php');
include('inc/header.php');


	if(isset($_GET['id']) && !empty($_GET['id'])){
		$film_id = $_GET['id'];
	}

	try{
		$film_store_results = $db->prepare('select inventory.store_id,inventory.film_id, store.address_id,address.address,address.address2,address.district,address.city_id,address.postal_code, address.phone FROM inventory INNER JOIN store ON inventory.store_id = store.store_id INNER JOIN address ON store.address_id = address.address_id WHERE inventory.film_id = ?');
		$film_store_results->bindParam(1,$film_id);
		$film_store_results->execute();
		$stores = $film_store_results->fetchAll(PDO::FETCH_ASSOC);
	}catch(Exception $e){
		echo $e->getMessage();
	}

?>


	<section>


		<div class="container">
			<div class="col col-primary">
			<ol id="film-list">

              <?php

              foreach($films as $film){
                echo '<li><a href="movie_store.php?id='
                  . $film['film_id'] .'"" title=""> '
                  . '<span style="display:initial" >' . $film['title'] . '</span>' 
                  . '<p style="display:none" class="film-description"> '. $film['description']  .' </p>'
                  . '</a></li>';
              }
                   
              ?>
          </ol>
			</div>

		
			<div class="col col-secondary">
				<div id="film-details  <?php echo ($film_id != NULL) ? 'on':'off'; ?>">

				<?php 

					foreach($stores as $store){
						echo "<div class='address-group' ><h3> Address 1: " . $store['address'] . '</h3>';

						if($store['address2'] != NULL && !empty($store['address2'])){
							echo '<h3> Address 2: ' . $store['address2'] . '</h3>';
						}

						if($store['district'] != NULL && !empty($store['district']) && $store['district'].length > 1){
							echo '<h3> District: ' . $store['district'] . '</h3>';
						}

						echo '<h3> City: ' . $store['city_id'] . '</h3>';

						if($store['postal_code'] != NULL && !empty($store['postal_code'])){
							echo '<h3> Postal Code: ' . $store['postal_code'] . '</h3>';
						}

						if($store['phone'] != NULL && !empty($store['phone']) && $store['phone'] > 1){
							echo '<h3> Phone: ' . $store['phone'] . '</h3>';
						}
						echo '</div>';
					}

						 echo '<style>';
						 	echo '.col-secondary{ max-height:25em; overflow-y:scroll;}';
							echo '#film-details h3{ margin-bottom: -1em; }';
							echo '.address-group{ margin-bottom: 0.5em;}';
						 echo '</style>';

					

				?>

				</div>

			</div>

		</div>
		
	</section>


<?php

include('inc/footer.php');	

?>
