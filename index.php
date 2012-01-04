<!DOCTYPE html>
<html>
<head>
	<title>IMGMI [ Upload Your Images ]</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
<style>
section p {
	margin-left: 35%;
	width: 100%;
}
</style>
</head>
<body>

	<?php
		include('includes/html/header.php');
	?>

	<section>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="content" size="30" /> <br />
			<input type="submit" value="Upload!" onclick="this.value='Uploading.......';" />
		</form>

		<br />	

		<form action="api.php" method="GET">
			<input type="text" name="url" /><br />
			<input type="submit" value="Upload via a URL" />
		</form>
	
		<p>
			Don't forget the 
				<a href="javascript:location.href='http://imgmi.net/api.php?url='+encodeURIComponent(location.href);" style="color:#000000;">Bookmarklet</a> <br />  <span style="text-align:center;"><a style="color:black;text-decoration:none;" target="_blank" href="http://www.pictureofacat.com/">&gt;^.^&lt;</a></span>
		</p>
	</section>
	<div style="width:96px; margin:auto;">
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="ST9J6G4QXR7JE">
	<input type="image" 
	src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" 
	border="0" name="submit" alt="PayPal - The safer, easier way to pay 
	online!">
	<img alt="" border="0" 
	src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" 
	height="1">
	</form>
	</div>
	
	<?php
		include('includes/html/footer.php');
		include('includes/html/stats.php');
	?>
</body>
</html>
