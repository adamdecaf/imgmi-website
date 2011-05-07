<!DOCTYPE html>
<html>
<head>
	<title>IMGMI [ Upload Your Images ]</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
<style>
a {
	color:#000000;
	text-decoration: undeline;
}
body {
	overflow: visible;
}
h3 {
	text-align: center;
}
label {
	font-size: 1.5em;
	font-weight: bold;
	margin-left: 25%;
}
p#answer {
	border: 1px solid #000000;
	margin-top: 25px;
	padding: 5px 5px 5px 5px;
}
ul {
	list-style-type: square;
	margin-left: 25%;
}
</style>
</head>
<body>

	<?php
		include("includes/html/header.php");
	?>

	<section>
		<p>
			<h3>Frequently Asked Questions About IMGMI.net</h3>
			<ul>
				<li><a href="#what">What is IMGMI.net?</a></li>
				<li><a href="#who">Who created IMGMI.net?</a></li>
				<li><a href="#why">Why was IMGMI.net created?</a></li>
				<li><a href="#how">How was IMGMI.net created?</a></li>
				<li><a href="#features">What does IMGMI.net offer?</a></li>
				<li><a href="#ads">Why don't I see any ads on IMGMI.net?</a></li>
				<li><a href="#rules">Does IMGMI.net have any rules?</a></li>
				<li><a href="legal.php">What are the TOS and/or Privacy policies for IMGMI.net?</a></li>
			</ul>
		</p>
		
		<!-- What is IMGMI.net  -->
		<a name="what"></a>
		<label>What?</label>
		<p id="answer">
			IMGMI.net is an image sharing website designed with the user in mind.  
			We are here to provide the best service for the lowest cost (free).
			Put simply, we are more than happy to allow you a free and quick image sharing platform.
		</p>
		
		<!-- Who created IMGMI.net -->
		<a name="who"></a>
		<label>Who?</label>
		<p id="answer">
			IMGMI.net was created by <a href="http://ashannon.us">Adam Shannon</a>.
			It is ran by him at a fairly low cost due to his large hosting package.  
			You can contact him <span onclick="this.innerHTML='adam@ashannon.us';">at any time</span>.
		</p>
		
		<!-- Why -->
		<a name="why"></a>
		<label>Why?</label>
		<p id="answer">
			IMGMI.net was created out of anger at other image hosting sites, some are covered in ads, some are horrible to navigate and some are just plain slow.
			IMGMI.net is the simplest image hosting site on the web.  We are here for one thing, image hosting and sharing.
			We will NEVER try to get you to do anything else on the site, we don't even record your IP address.
		</p>
		
		<!-- How -->
		<a name="how"></a>
		<label>How?</label>
		<p id="answer">
			IMGMI.net was created with <a href="http://php.net">PHP</a>. PHP has always been a good language to use, and it's farily simple to code with.
		</p>
		
		<!-- Features -->
		<a name="features"></a>
		<label>Features</label>
		<p id="answer">
			IMGMI.net has a few features, we offer 
				<a href="index.php">image hosting</a>, <a href="report.php">image reporting</a>, and an <a href="api.php">API</a>.  
			We have more features in the <a href="planned.php">works</a>.
		</p>
		
		<!-- Ads -->
		<a name="ads"></a>
		<label>Ads</label>
		<p id="answer">
			We will NEVER (ever) place visual ads on IMGMI.net, if the hosting costs become to much for me to pay I may place text ads on the site, 
			but only after a user poll and public vote.  This is not my site, it's ours.
		</p>
		
		<!-- Rules -->
		<a name="rules"></a>
		<label>Rules</label>
		<p id="answer">
			Simply, don't upload anything that will be removed.  I don't want to waste time deleting images that are not allowed, 
			and you don't want to re-upload images daily.  Just keep it clean, <a href="legal.php">You can read more here</a>.
		</p>
		
		<!-- Privacy -->
		<a name="privacy"></a>
		<label>Privacy</label>
		<p id="answer">
			Due to the increased traffic and more images being upload, I have started to store uploads.  The only information that is saved
			are: (`id`, `path`, `ip`, `time`, `date`).  The id is a numeric (auto incrementing) id to number each upload.  The path is everything
			after 'http://imgmi.net/', which is used to track the physical location of each image.  The IP is your Internet Protocol address, and the
			time/date are the standard measures of time.<br /><br />
			
			As of 2010-01-01 we are now storing IP's as a sha1 hash function of your IP, this means that we're no longer storing your IP in plain text
			(e.g. 127.0.0.1) it's now stored as something like 4b84b15bff6ee5796152495a230e45e3d7e947d9, that string is not reversible and not trackable.
			<br /><br />
			
			This information is only stored to prevent any spammers from uploading multiple violating images.  If you wish for your information to be removed,
			please contact me via the <a href="http://imgmi.net/report.php">report</a> form.
		</p>
	</section>
	
	<?php
		include("includes/html/footer.php");
		include("includes/html/stats.php");
	?>
</body>
</html>