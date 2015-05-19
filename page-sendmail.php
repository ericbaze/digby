<!doctype html>
<html lang="en">
<head>
	<meta title="charset" content="utf-8" />
	<style>
		body{background:black;color:rgb(0,255,0);font-family:"courier new",courier,sans-serif;}
		label{font-weight:bold;}
		p{margin-top:0.5em;}
	</style>
</head>
<body>
	<?php
		// send mail
		// $to = 'kehughan@gmail.com';
		$to = 'info@digby.com';

		$subject = 'Contact Form Submission';
		$message = urldecode(htmlspecialchars($_GET["mailMessage"]));
		$status = '';

		// show us what we're going to send to send
		if ($message == '') {
			$message = "Problem getting message content.";
		}

		// send it, tell us if it worked
		if (wp_mail($to,$subject,$message)) {
			$status = 'Success';
		} else {
			$status = 'Failure';
		}
	?>
	<h1>sendmail 2</h1>
	<label>Message</label>
	<p><?php echo $message; ?></p>
	<label>Status</label>
	<p><?php echo $status; ?></p>
</body>
</html>
