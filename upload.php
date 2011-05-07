<?php
/**
 * imgLoad Config
 * Adam Shannon
 * 07/05/2009
 */

// Define some constants.
include("includes/php/upload-config.php");

	// Ok so lets gather the uplaods...
		$uploads = $_FILES['content'];
			// print_r($uploads);
			
		// Now upload the file
		if (in_array($uploads['type'], $allowedTypes)) {
			if ($uploads['size'] <= $maxSize) {
				
				// Set the new name
				$newName = md5_file($uploads['tmp_name']);
				$firstChar = substr($newName, 0, 1);
					$newName = substr($newName, 0, 8);
					
					// Get the file extenstion.
					switch ($uploads['type']) {
						case $allowedTypes[0]:		$ext = ".gif";		break;
						case $allowedTypes[1]:		$ext = ".jpg";		break;
						case $allowedTypes[2]:		$ext = ".tif";		break;
						case $allowedTypes[3]:		$ext = ".bmp";		break;
						case $allowedTypes[4]:		$ext = ".ico";		break;
						case $allowedTypes[5]:		$ext = ".png";		break;
					}
					
					// Move the file
					move_uploaded_file($uploads['tmp_name'], $firstChar . "/" . $newName);
				
					// Rename the file
					rename($firstChar . "/" . $newName, $firstChar . "/" . $newName . $ext);
					
				// Now print the messsage
				$URI = "http://imgmi.net/" . $firstChar . "/" . $newName . $ext;
				$message = "Your file is located below.";
				
				// Place it into a database.
				$link = mysql_connect('db2132.perfora.net', 'dbo308622575', '4PNm58LAKr6LuI');
				
					// Set the vars.
					$path = mysql_real_escape_string($firstChar . "/" . $newName . $ext, $link);
					$ip = mysql_real_escape_string(sha1($_SERVER['REMOTE_ADDR']));
					$time = mysql_real_escape_string(@date('Hi'));
					$date = mysql_real_escape_string(@date('Y-m-d'));
				
				// Form the query.
				$sql = "INSERT INTO `db308622575`.`images` (`id`,`path`,`ip`,`time`,`date`,`type`) VALUES('null', '$path', '$ip', '$time', '$date', 'web');";
				
				// Submit.
				mysql_query($sql, $link);
				
			} else {
				$message = "Error, Your file  is too large.  Please <span onclick=\"this.innerHTML='adam [AT] imgmi.net';\">tell me to change it</span>.";
			}
		} else {
			$message = "Error, Your file type is not supported.  Please <span onclick=\"this.innerHTML='adam [AT] imgmi.net';\">tell me to support it</span>.";
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>IMGMI [ Upload Your Images ]</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
</head>
<body>

	<?php
		include("includes/html/header.php");
	?>

	<section>
		<p>
			<?php
			// Print the upload message
				echo $message . "<br /><br />";
				
				// Now print the URI
				echo "URI: <input type='text' id='upload' value='" . $URI . "' size='60' />";
				
			?>
		</p>
	</section>
	
	<?php
		include("includes/html/footer.php");
		include("includes/html/stats.php");
	?>
</body>
</html>