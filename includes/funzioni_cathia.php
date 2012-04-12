<?php 
	include 'funzioni_db.php';
	
	function getOrdiniAperti (){
		$query= "SELECT * FROM ordine where stato= 0";
		$risultato= mysql_query($query) or die ('Query Fallita: '.$query);
		$risposta = array();
		while  ($ordine= mysql_fetch_array ($risultato, MYSQL_ASSOC))	
		{
			$risposta[] = $ordine;
		}
		return $risposta;							
	}
	
	function getCibiInAttesa ($id_ordine){
		$query= "SELECT  cibo_id FROM ordine_has_cibo where stato=0 and ordine_id=$id_ordine";
		$risultato= mysql_query ($query) or ('Query Fallita: '.$query);
		$risposta = array ();
		while ($ordine= mysql_fetch_array ($risultato, MYSQL_ASSOC))
		{
			$risposta[]= $id_ordine;		
		}
		return $risposta;	
	}
	
	function getCibiInPreparazione ($id_ordine){
		$query= "SELECT  cibo_id FROM ordine_has_cibo where stato=1 and ordine_id=$id_ordine";
		$risultato= mysql_query ($query) or ('Query Fallita: '.$query);
		$risposta = array ();
		while ($ordine= mysql_fetch_array ($risultato, MYSQL_ASSOC))
		{
			$risposta[]= $ordine;		
		}
		return $risposta;	
	}
	function getCibiPronti ($id_ordine){
		$query= "SELECT  cibo_id FROM ordine_has_cibo where stato=2 and ordine_id=$id_ordine";
		$risultato= mysql_query ($query) or ('Query Fallita: '.$query);
		$risposta = array ();
		while ($ordine= mysql_fetch_array ($risultato, MYSQL_ASSOC))
		{	
			$risposta[]= $id_ordine;
		}
		return $risposta;
	}
	
	function aggiornaStatoCiboInOrdine($id_ordine, $id_cibo)
	{
		$query= "Update ordine_has_cibo SET stato= stato+1 WHERE ordine_id= $id_ordine AND cibo_id= $id_cibo";
		mysql_query($query) or die ('Query fallita :'.$query);
	}
?>













