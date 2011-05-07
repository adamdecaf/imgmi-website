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
	margin-left: 36%;
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
	</section>
	
	<section>
		<p>
			Don't forget the 
				<a href="javascript:location.href='http://imgmi.net/api.php?url='+encodeURIComponent(location.href);" style="color:#000000;">Bookmarklet</a>!
		</p>
	</section>
	
	<?php
		include('includes/html/footer.php');
		include('includes/html/stats.php');
	?>
</body>
</html>