<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="POST" action="index.php">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" required><br><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" required><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>

		<label for="conf_password">Confirm Password:</label>
		<input type="password" id="conf_password" name="conf_password" required><br><br>

		<input type="submit" value="Register">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$conf_password = $_POST["conf_password"];

			if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($conf_password)){
				echo "All fields are required and must not be empty";
			} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "Invalid email format";
			} elseif($password != $conf_password){
				echo "Passwords do not match";
			} else {
				echo "Registration successful!";
			
?>