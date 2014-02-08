<?php
	if (isset($_POST['Submit'])) { //check if form was submitted
		$username = $_POST['email']; //email from the form input
		$password = $_POST['password']; //password from the form input
		
		if($username == 'volunteer@we365.com' && $password == 'volunteer') { //hardcoded 'correct' login
			echo "Welcome back $username !"; //welcome message
		}
		else if($username == 'volunteer@we365.com' && $password != 'volunteer') { //wrong password
			echo "Incorrect password, please try again.";
		}
		else { //wrong username
			echo "This username does not exist, please try again."; 
		}
	}
?>