<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (!isset($_REQUEST['name'])&& empty($_REQUEST['name'])&& 
			!isset($_REQUEST['email'])&& empty($_REQUEST['email'])&&
			!isset($_REQUEST['message'])&& empty($_REQUEST['message']
			)){
			
			if (empty($_REQUEST['name'])) {
				echo '<p class="error">Please enter your name</p>';
			}
			elseif (empty($_REQUEST['email'])) {
				echo '<p class="error">Please enter your email</p>';
			}
			elseif (empty($_REQUEST['message'])) {
				echo '<p class="error">Please enter a message</p>';
			}
		}
		else {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$why = $_POST['why'];
			$message = $_POST['message'];
		}

		mail('b.prodan95@gmail.com', 'Portfolio Website Request', $message, $name, $email, $why);
	}
?>