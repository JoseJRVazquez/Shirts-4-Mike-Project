<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// This code establishes the variables of the email form
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	//This code establishes the content of the email in a readable format
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message;

// Still to do is the Send Email protocol

//This forwards the page to the thank you page
header("Location: contact-thanks.php");
}
?>
<?php 
$pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php'); ?>

<div class="section page">

	<div class="wrapper">

		<h1>Contact</h1>

		<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

		<!--This is the Contact Form for this page-->

		<form method="post" action="contact.php">

			<table>
				<tr>
					<th>
						<label for="name">Name</label>
					</th>
					<td>
						<input type="text" name="name" id="name">
					</td>
				</tr>
				<tr>
					<th>
						<label for="email">Email</label>
					</th>
					<td>
						<input type="text" name="email" id="email">
					</td>
					<tr>
					<th>
						<label for="message">Message</label>
					</th>
					<td>
						<textarea name="message" id="message"></textarea>
					</td>
				</tr>
				</tr>
			</table>
			<input type="submit" value="Send">

		</form>

</div>
	
</div>

<!--This is the footer include for this page-->

<?php include('inc/footer.php'); ?>