<?php
	include 'configurazione.php';

	$link = mysql_connect($dbhost, $dbuser, $dbpassword)
	or die ('Could not connect: ' . mysql_error());

	mysql_select_db($dbname)
	or die('Could not select database');	
		
	function getCategoria ($categoria){
		$query="SELECT * FROM categoria";
		$risultato= mysql_query($query) or die ('Query Fallita: '.$query);
		$categoria= mysql_fetch_array ($risultato, MYSQL_ASSOC);
		return $categoria;
	}
			
	function getCiboFromId ($id){
		$query= "SELECT * FROM cibo where id=$id";
		$risultato= mysql_query($query) or die('Query fallita  :'.$query);
		$cibo= mysql_fetch_array ($risultato, MYSQL_ASSOC); 
		return $cibo;
	}
	
	function modificaCibo ($cibo){
		$query= "Update cibo SET where descrizione=$descrizione,$costo WHERE id=$id";
		mysql_query($query) or die ('Query fallita :'.$query);
		echo ($query);
	}
				
						
			
	?>