<?php 
	$link = mysql_connect('localhost', 'root') or die('Could not connect: ' . mysql_error());
	  
	mysql_select_db('ristorante') or die('Could not select database');	

	function getOrdineaperto (){
		$query= "SELECT * FROM Ordine where stato= 0";
		$risultato= mysql_query($query) or die ('Query Fallita: '.$query);
		$ordine= mysql_fetch_array ($risultato, MYSQL_ASSOC);
					
		while  (mysql_fetch_array ($risultato, MYSQL_ASSOC))			
		{
			echo getOrdineaperto;
		}
		return $ordine;							
	}

	function getCibidapreparareinordine (){
		$query= "SELECT ordine_has_cibo FROM Ordine where stato=1";
		$risultato= mysql_query($query) or die('Query fallita  :'.$query);
		$ordine= mysql_fetch_array ($risultato, MYSQL_ASSOC); 
		return $ordine;
	}
				
	function getCibiinpreparazioneinordine(){
		$query= "SELECT ordine_has_cibo FROM Ordine where stato=1";
		$risultato= mysql_query($query) or die('Query fallita  :'.$query);
		$cibi= mysql_fetch_array ($risultato, MYSQL_ASSOC); 
		return $cibi;
	}
	
	function getCibidaservireinordine (){
		$query= "SELECT ordine_has_cibo FROM Ordine where stato=2";
		mysql_query($query) or die ('Query fallita :'.$query);
		return ($query);
	}
?>