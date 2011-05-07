<?php
/**
 * API Upload
 * Adam Shannon
 * 07/15/2009
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title>IMGMI [ Upload Your Images ]</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
<style>
body {
	overflow: visible;
}
input {
	width: 200px;
}
</style>
</head>
<body>

	<?php
		include("includes/html/header.php");
	?>

	<section>
		<p>
			How to use.<br /><br />
			<strong>http://imgmi.net/api.php?url=http://domain.tld/link/to/image.jpg</strong>
			
			<br /><br />
			I will take care of the rest.
		</p>
	</section>
	
	<?php
	// Check for the existance of a URI in the ?url= query.
	if (isset($_GET['url']) && $_GET['url'] != "") {
		
		// Load some settings
		require("includes/php/upload-config.php");
		
		// Find out what the image type is
		$type = explode(".", $_GET['url']);
			$tmp = count($type) - 1;
		
			// Set the image extenstion
			switch ($type[$tmp]) {
				case $allowedFiles[0]:		$ext = ".gif";		break;
				case $allowedFiles[1]:		$ext = ".jpg";		break;
				case $allowedFiles[2]:		$ext = ".tif";		break;
				case $allowedFiles[3]:		$ext = ".bmp";		break;
				case $allowedFiles[4]:		$ext = ".ico";		break;
				case $allowedFiles[5]:		$ext = ".png";		break;
				default:					$ext = "none";		break;
			}
			
			// Check to see if the file is valid
			if ($ext == "none") {
				// Print and error:
				$location = "Error: The filetype is not allowed";
				
			} else {
				// Now get the new file name.
				$newName = explode("/", $_GET['url']);
				$tmp = count($newName) - 1;
			
				$hash = substr(md5($newName[$tmp]), 0, 8);
				$firstChar = substr($hash, 0, 1);
			
				// Now set the location
				$location = $firstChar . "/" . $hash . $ext;
				
				// Grab the image
				file_put_contents($location, file_get_contents($_GET['url']));
				
				// Change the location
				$location = "http://imgmi.net/" . $location;
				
					// Place it into a database.
					$link = mysql_connect('db2132.perfora.net', 'dbo308622575', '4PNm58LAKr6LuI');
					
						// Set the vars.
						$path = mysql_real_escape_string($firstChar . "/" . $hash . $ext, $link);
						$ip = mysql_real_escape_string(sha1($_SERVER['REMOTE_ADDR']));
						$time = mysql_real_escape_string(@date('Hi'));
						$date = mysql_real_escape_string(@date('Y-m-d'));
					
					// Form the query.
					$sql = "INSERT INTO `db308622575`.`images` (`id`,`path`,`ip`,`time`,`date`,`type`) VALUES('null', '$path', '$ip', '$time', '$date', 'api');";
					
					// Submit.
					mysql_query($sql, $link);
				
			}
			
		// Print the URI.
		echo "<section>";
			echo "URI: <input type='text' value='" . $location . "' />";
		echo "</section>";
	}
	
	// Print the footer and Google Stats Code.
		include("includes/html/footer.php");
		include("includes/html/stats.php");
	?>
</body>
</html>