<?php

include('inc/header_with_bootstrap.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){


	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$technical_problem = trim($_POST['technical_problem']);
	$favorite_food = $_POST['favorite_food'];


	if($name == "" OR $email == "" OR $technical_problem == ""){
		$error_message = "Please enter a value for the name, email, and technical problem";
	}

	if(!isset($error_message)){
		foreach($_POST as $value){
			if(stripos($value,'Content-Type:') !== FALSE){
				$error_message = 'There was a problem with the information you entered!';
			}
		}
	}


	if(!isset($error_message) && $favorite_food != ""){
		$error_message = "Your form submission has an error.";
	}

	require 'inc/PHPMailerAutoload.php';

	$mail = new PHPMailer();

	if(!isset($error_message) && !$mail->ValidateAddress($email)){
		$error_message = "You must specify a valid email";
	}

	if(!isset($error_message)){
		$email_body = "";
		$email_body .= "Name: " . $name . "<br>";
		$email_body .= "Email: " . $email . "<br>";
		$email_body .= "Technical Problem: " . $technical_problem;


		$mail->setFrom($email, $name);
		$mail->addAddress('r05627039@ntu.mail.edu', 'Sakila Movie Database Admin');     // Add a recipient
		$mail->addAddress('2081439477@qq.com', 'Sakila Assistant Admin');               // Name is optional
	

		$mail->Subject = 'Technical Problem: ' . $name;
		$mail->Body    = $email_body;


		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo $error_message . $mail->ErrorInfo;
		} else {
			echo "<script>window.top.location='report_problem.php?status=thanks'</script>";
			exit;

		}

	}

}

?>

<style>

	.problem-title{
		margin-left: 2em;
	}

	form{
		margin-left: 2em;
	}

</style>

<?php
	if(isset($error_message)){
		echo "<div class='alert alert-danger' role='alert'>";
  		echo "<strong>Error!</strong> " . $error_message;
		echo "</div>";
	}else{

		if(!isset($_GET['status'])){
		echo "<div class='problem-title'>";
		echo "<h3>Any Problems? Please let us know!  </h3>";
		echo "<h3> We value your service and will try to solve the problem as soon as possible!</h3>";
		echo "</div>";
		}
	}

	if(isset($_GET['status']) && $_GET['status'] == 'thanks') {
?>
	

	<div class="problem-title">
		<h3> Thank you for notifying us!</h3>
	</div>


<?php } else { ?>


<form action="report_problem.php" method="post">
	<div class="form-group">
		<label for="name"> Name:
			<input class="form-control" name="name" type="text" value="<?php if(isset($name)){ echo htmlspecialchars($name);}  ?>"/>
		</label>
	</div>

	<div class="form-group">
		<label for="email"> Email Address:
			<input class="form-control" name="email" type="email" value="<?php if(isset($email)){ echo htmlspecialchars($email);} ?>"/>
		</label>
	</div>

	<div class="form-group">
		<label for="technical_problem"> Describe the problem:
			<textarea class="form-control" name="technical_problem" type="text" id="technical_problem">
				
				<?php
					if(isset($technical_problem)){
						echo htmlspecialchars($technical_problem);
					}
				?>
			</textarea>
		</label>
	</div>

	<!-- Honeypot input field - ensures protection against auto-filling by malicious bots -->
	<div class="form-group" style="display:none">
		<label for="favorite_food">
			<input class="form-control" type="text" name="favorite_food" id="favorite_food"/>
		</label>
	</div>
	
	<button class="btn btn-primary" type="submit" value="Send" id="submit">Report Problem!</button>
	
</form>


<?php } ?>



<?php
	include('inc/footer_with_bootstrap.php');
?>
