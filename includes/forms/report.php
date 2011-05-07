<?php
/**
 * IMGMI report.php form processor
 * Adam Shannon
 * 07/15/2009
 */
 
// Remember:
//  Your getting these fields ("name", "uri", "message") in POST.

	$data['name'] = 	trim($_POST['name']);
	$data['message'] = 	trim($_POST['message']);
	$data['uri'] = 		trim($_POST['uri']);
	
	// Clean the data
	$data['name'] = 	htmlentities($data['name']);
	$data['message'] = 	htmlentities($data['message']);
	$data['uri'] = 		htmlentities($data['uri']);
	
	// Set up the message
	$mail['to'] = 		"adam@imgmi.net";
	$mail['subject'] = 	"An image removal request.";
	$mail['message'] = 	$data['name'] . " wants you to remove the image located here:\n" . $data['uri'] . "\n\nHis reason is:\n" . $data['message'];
	$mail['headers'] = 	"From: report@imgmi.net";
	
	// Send the mail
	mail($mail['to'], $mail['subject'], $mail['message'], $mail['headers']);
?>
<html>
<head>
	<title>Message Sent!</title>
</head>
<body>

<header>
	<h3>Thank you for reporting the image.</h3>
</header>

<section>
	<p>
		We will respond to your request as soon as we can.  In the meantime if you are not 
		redirected please <a href="http://imgmi.net/" style="color:#000000;">return home</a>.
	</p>
</section>

<script>
// Redirect the user back in 5 seconds.
	setTimeout(function () {
		window.location = "http://imgmi.net/";
		}, 5000);
</script>
</body>
</html>