<?php
	include 'configurazione.php';

	$link = mysql_connect($dbhost, $dbuser, $dbpassword)
	or die ('Could not connect: ' . mysql_error());

	mysql_select_db($dbname)
	or die('Could not select database');	
		
	
	?>