<!DOCTYPE html>
<html>
<head>
	<title>IMGMI [ Upload Your Images ]</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
<style>
label {
	font-weight: bold;
	margin-left: -30px;
}
	input#name {
		margin-left: 25px;
	}
	input#uri {
		margin-left: 5px;
	}
	input#submit {
		height: 50px;
		margin-left: -30px;
		width: 325px;
	}
	textarea {
		height: 70px;
		margin-left: 47px;
		width: 208px;
	}
</style>
</head>
<body>

	<?php
		include("includes/html/header.php");
	?>

	<section>
		<p>
			<form action="includes/forms/report.php" method="post">
				<label for="name">Your name:</label>
					<input type="text" name="name" id="name" size="30" /><br />
					
				<label for="uri">URI of Image:</label>
					<input type="text" name="uri" size="30" id="uri" /><br />
				
				<label for="message">Reason:</label>
					<textarea name="message" id="message"></textarea><br />
					
				<input type="submit" value="Submit" id="submit" />
			</form>
		</p>
	</section>

	<?php
		include("includes/html/footer.php");
	?>
</body>
</html>