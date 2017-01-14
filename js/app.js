
var loadCSSsettings = function(){
	// $('a').css('text-decoration','none');
	// $('body').css('background-color','pink');


}

$(document).ready(function(){
	loadCSSsettings();
});

$('h3 span:first').show(2000);
$('h3 span:nth-child(2)').show(4000);
$('h3 span:nth-child(3)').show(6000);
$('h3 span:nth-child(4)').show(8000);
$('h3 span:last').show(12000);

$('header h2').hover(
	function(){
		$(this).css('text-shadow','2px 2px 2px gold');
	},
	function(){
		$(this).css('text-shadow','');
	}

);



$('ol li').hover(

	

	function(){

		var item_siblings = $(this).siblings();
		var find_item = $(this).find('a');

		item_siblings.each(function(index){
			var anchor_tag = $(this).find('a');

			if($(this).find('a').css('color') !== 'green'){

				anchor_tag.css('color','green');
			}else{

				$(this).find('a').css('color','');
			}

		});

		find_item.css('color','yellow');
		find_item.css('text-shadow','2px 2px 2px green');


	},

	function(){

	var item_siblings = $(this).siblings();
	var find_item = $(this).find('a');

		item_siblings.each(function(index){
		if($(this).find('a').css('color') !== 'blue'){
			$(this).find('a').css('color','blue');

		}else{
			$(this).find('a').css('color','');

		}

		$(this).find('a').css({'font-family': "'Abril Fatface', cursive"});	
		find_item.css('color','blue');
		find_item.css('text-shadow','');

	})

});
