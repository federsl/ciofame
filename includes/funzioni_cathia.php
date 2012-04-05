<?php 
	$link = mysql_connect('localhost', 'root') or die('Could not connect: ' . mysql_error());
	mysql_select_db('ristorante') or die('Could not select database');	

	function getCiboFromId($id) { 
		$query = "SELECT * FROM cibo WHERE id=$id"; 
		$risultato = mysql_query($query) or die('Richiesta fallita' . $query);   
		$cibo = mysql_fetch_array($risultato, MYSQL_ASSOC); 
		return $cibo; 
	} 
	function getOrdiniAperti (){
		$query= "SELECT * FROM one where stato= 0";
		$risultato= mysql_query($queryrdi) or die ('Query Fallita: '.$query);
		$risposta = array();
		while  ($ordine= mysql_fetch_array ($risultato, MYSQL_ASSOC))	
		{
			$risposta[] = $ordine;
		}
		return $risposta;							
	}
	function getCibiInPreparazione (){
		$query= "SELECT  cibo_id FROM ordine_has_cibo where stato=1";
		$risultato= mysql_query ($query) or ('Query Fallita: '.$query);
		$risposta = array ();
		while ($ordine= mysql_fatch_array ($risultato, MYSQL_ASSOC))
		{
			$risposta[]= $ordine;		
		}
		return $risposta;	
	}
	function getCibiPronti (){
		$query= "SELECT  cibo_id FROM ordine_has_cibo where stato=2";
		$risultato= mysql_query ($query) or ('Query Fallita: '.$query);
		$risposta = array ();
		while ($ordine= mysql_fatch_array ($risultato, MYSQL_ASSOC))
		{	
			$risposta[]= $ordine;
		}
		return $risposta;
	}
?>