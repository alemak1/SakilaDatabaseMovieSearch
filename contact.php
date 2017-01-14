<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	require 'inc/PHPMailerAutoload.php';

	$mail = new PHPMailer;



	/** If email sent successfully, redirect to thanks page, otherwise, display form **/
	header('contact.php?status=thanks');
}

?>


<?php
	if(isset($_GET['status']) && $_GET['status'] == 'thanks') {
?>
			
	<h4>Thank you for reporting the problem!  </h4>	
	<h3> We value your service and will try to solve the problem as soon as possible! </h3>
	
<?php } else { ?>


<form action="" method="post" action="contact.php">

	<div class="form-group">
		<label for="name">
			<input type="text"/>
		</label>
	</div>

	<div class="form-group">
		<label for="email">
			<input type="email"/>
		</label>
	</div>

	<div class="form-group">
		<label for="technical_problem">
			<textarea type="text" id="technical_problem"></textarea>
		</label>
	</div>

	<!-- Honeypot input field - ensures protection against auto-filling by malicious bots -->
	<div class="form-group" style="display:hidden">
		<label for="favorite_food">
			<input type="text" id="favorite_food"/>
		</label>
	</div>
	
	<input type="submit"> Place Rental Order </button>
	
</form>


<?php } ?>
