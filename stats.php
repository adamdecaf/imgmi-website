<?php
/**
 * IMGMI Stats
 * Adam Shannon
 * 2009-11-21
 */

$link = mysql_connect('db2132.perfora.net', 'dbo308622575', '4PNm58LAKr6LuI');
$sql = 'SELECT `id` FROM `db308622575`.`images` WHERE `path` NOT LIKE "0/0d5b1c4c.jpg"';

	$result = mysql_query($sql, $link);
	
	// I didn't stat tracking the uploads before this amount were already in the db.
	$images = 710 + 186;
	
	while($row = mysql_fetch_assoc($result)) {
		$images++;
	}	

// Grab the images from today.
$today = 0;

	if ($_GET['date'] != '') {
		$date = mysql_real_escape_string($_GET['date'], $link);
	} else {
		$date = mysql_real_escape_string(@date('Y-m-d'), $link);
	}
	
$sql = 'SELECT `time` FROM `db308622575`.`images` WHERE `date` = \'' . $date . '\' AND `path` <> "0/0d5b1c4c.jpg"';
//echo $sql;

	$result = mysql_query($sql, $link);
	
	while($row = mysql_fetch_assoc($result)) {
		$today++;
		$data[$today] = $row;
	}
	
	echo "<!-- Today:" . $today++ . ", Total:" . $images . " -->\n";
	echo 'Images: ' . $images . '<br />';
	echo 'Today: ' . $today . '<br /><br />Break Down:<br />';

	while($today--) {
		echo $data[$today]['time'] . '<br />';
	}
