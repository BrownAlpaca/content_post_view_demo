<?php
/*
 * r2d2.php
 * This file is available to you at 8:00am on 16 March 2019.
 * 
 * R2D2 is the messenger in the Star Wars movies. 
 * This script is a messenger script, i.e. you are expected to implement
 * the contact or messaging functionality in this script.
 * 
 * Implement the following features in this form:
 * (0) The style of this page must be the same as other pages in this website.
 * (1) Update the contact form:
 *     1.1. Set value of the "email" input field to disabled, and display value from the session variable.
 *     1.2. Set value of the "fullname" input field to disabled, and display value from the session variable.
 * (2) Style the contact form using one of the Bootstrap form styles. All other pages in this implementation of this website uses Bootstrap, so this file must also use Bootstrap.
 * (3) Form processing:
 *     3.1. The contact form must be processed on this page.
 *     3.2. Validate the form input data.
 *     3.3. Use PHP's mail() function to send an email to an email address that you would specify in includes/constants.php
 *          -> The mail() function has the following (basic) syntax:
 				mail ( string $to , string $subject , string $message )
 *          -> $to is a string indicating the "to email address"
 *          -> $subject indicates the email's subject
 *          -> $message indicates the message that is being sent through the email.
 *          -> Create the message and call the function.
 *          -> Put all the function arguments in the correct order and call the function.
 *          -> It is okay if the mail() function does not send an email. 
 *          -> Call the function correctly and that is sufficient.
 *          -> If you have any questions, contact raghav@cs.dal.ca or get in touch with your TAs.
 */
?>
<?php 
	session_start();
    if($_SESSION["username"]==null){
              header("Location: index.php?attempt=unauthorized_access");
    }
	include "includes/header.php"; 
?>

	<main class="container">

		<h2 class="display-4" action="<?php echo basename($_SERVER['PHP_SELF']); ?>">The Messenger</h2>
		<form id="contactForm" method="post">
			<div class="form-group">
				<label for="email">fullname:</label>
				<input type="text" class="form-control" name="fullname" value="disabled">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>	
				<input type="text" class="form-control" name="email" value="disabled">
			</div>	
			<textarea class="form-control" row="5"></textarea>
			<input type="submit" class="btn btn-primary" name="submitMsg">
			<input class="btn btn-danger" type="button" name="resetMsg" value="Clear" onclick="document.getElementById(contactForm).reset();">
		</form>
	</main>
	<?php
		if(isset($_POST['submitMsg'])){
			$email = validateData($_POST['email']);
			$fullname = validateData($_POST['fname']);
			$content = validateData($_POST['contact']);
			$to = getEmailName();
			mail($to,"NEW message", $content);
		}
	?>	
<?php include "includes/footer.php"; ?>