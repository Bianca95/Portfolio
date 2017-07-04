<?php
	if (!isset($_POST['submit'])) {
		echo "Error! You need to submit the form first!"
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$why = $_POST['why'];
	$message = $_POST['message'];

	if (empty($name)) {
		echo '<p class="error">Please enter your name</p>';
		exit();
	}
	elseif (empty($email)) {
		echo '<p class="error">Please enter your email</p>';
		exit();
	}
		elseif (empty($message)) {
		echo '<p class="error">Please enter a message</p>';
		exit();
	}

	$from = 'b.prodan95@gmail.com';
	$subject = 'Portfolio Request';
	$body = 'You have received a new message from $name. \n Email address: $email. \n Reason: $why. \n Message: $message.';
	$to = 'b.prodan95@gmail.com';
	$headers = 'From: $from \r\n';

	mail($to,$subject,$body,$headers);

	header("Location: https://fthmb.tqn.com/8FB0zqzMSUhgTA-1QfYQpeMpfYY=/3865x2576/filters:fill(auto,1)/about/thank-you-185078737-58adfa013df78c345b0837e7.jpg");
	exit();
?>