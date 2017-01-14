

$('#add_film_btn').click(function(){
	console.log('Creating new movie...');

	//collect user input and store in variables
	var film_name = $('#film_name');
	var plot_summary = $('#plot_summary');
	var category = $('input:radio[name=film_category]:checked');
	var rating = $('#film_rating');

	//generate new HTML element

	var new_movie = $('<p>' + film_name.val() + plot_summary.val() + category.val() + rating.val() + '</p>');

	//display new HTML element
	$('#new_film_display').html('');

	$('#new_film_display').html(new_movie);

});

