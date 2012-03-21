<?php 

include 'funzioni_db.php';

function getCategoria ($categoria){
		$query="SELECT * FROM categoria";
		$risultato= mysql_query($query) or die ('Query Fallita: '.$query);
		$categoria= mysql_fetch_array ($risultato, MYSQL_ASSOC);
		return $categoria;
	}
			
	function getCiboFromCategoria ($cibo_cat){
		$query= "SELECT cibo FROM categoria where id=$id";
		$risultato= mysql_query($query) or die('Query fallita  :'.$query);
		$$cibo_cat)= mysql_fetch_array ($risultato, MYSQL_ASSOC); 
		return $cibo_cat);
	}
	
	function getCibi($cibi){
		$query= "SELECT * FROM cibo ";
		$risultato= mysql_query($query) or die('Query fallita  :'.$query);
		$cibi= mysql_fetch_array ($risultato, MYSQL_ASSOC); 
		return $cibi;
		
	}function modificaCibo ($cibo){
		$query= "Update cibo SET where descrizione=$descrizione,$costo WHERE id=$id";
		mysql_query($query) or die ('Query fallita :'.$query);
		echo ($query);
	}
	
	

?>