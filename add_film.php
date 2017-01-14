<?php

require_once('inc/database.php');
include('inc/header.php');
include('inc/addform_css.php');

?>

<section>
	<div class="container">
		
	
		<div id="add_film_form">
		<form>
			
		<div class="form-group">
		<label for="film_name">Film Name: <input type="text" name="film_name" value="" id="film_name"></label>
		</div>

		<div class="form-group">
		<label for="plot_summary">Plot Summary: <textarea type="text" name="plot_summary" value="" id="plot_summary">
		</textarea>
		</label>
		</div>

		
			<div class="form-group">
			<h4>Category: </h4>

			<div class="category-group">
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="action"> Action </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="animation"> Animation </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="children"> Children </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="classics"> Classics </label>
			</div>
		
			<div class="category-group">
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="comedy"> Comedy </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="documentary"> Documentary </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="drama"> Drama </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="family"> Family </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="foreign"> Foreign </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="games"> Games </label>
			</div>

			<div class="category-group">
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="horror"> Horror </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="music"> Music </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="new"> New </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="sci-fi"> Sci-Fi </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="sports"> Sports </label>
			<label for="film_category"> <input type="radio" name="film_category" class="film_category" value="travel"> Travel </label>
			</div>
		</div>

		
		<div class="form-group" id="rating-group">
			<label for="film_rating"> Rating: </label>
			<select name="film_rating"  id="film_rating">
				<option value="G">G</option>
				<option value="PG-13">PG-13</option>
				<option value="R">R</option>
				<option value="NC-17">NC-17</option>
			</select>		
		</div>



		<div id="add_film_btn">Add film!</div>
		
		</form>
		</div>

		
	</div>
</section>

<section>
	<div class="container">
		<div id="new_film_display">
	</div>

</section>


<?php

include('inc/footer.php');

?>

<script type="text/javascript" src="js/addfilm_app.js"></script>
