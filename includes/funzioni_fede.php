<?php 
	include 'funzioni_db.php';
	function getCategorie (){
		$query="SELECT * FROM categoria";
		$risultato= mysql_query($query) or die ('Query Fallita: '.$query);
		$categorie = array();
		while ($riga = mysql_fetch_array ($risultato, MYSQL_ASSOC)) {
			$categorie[] = $riga;
		}
		return $categorie;
	}			
	function getCibiFromCategoria ($categoria_cibi){
		$query= "SELECT * FROM cibo where categoria_id=$categoria_cibi";
		$risultato= mysql_query($query) or die('Query fallita  :'.$query);
		$categoria_cibi = array();
		while ($riga = mysql_fetch_array ($risultato, MYSQL_ASSOC)) {
			$categoria_cibi[] = $riga;
		}
		return $categoria_cibi;
	}
	function getCibi($cibi){
		$query= "SELECT * FROM cibo ";
		$risultato= mysql_query($query) or die('Query fallita  :'.$query);
		$cibi= mysql_fetch_array ($risultato, MYSQL_ASSOC); 
		return $cibi;	
	}
	function modificaCibo ($cibo){
		$query= "Update cibo SET where descrizione=$descrizione,$costo WHERE id=$id";
		mysql_query($query) or die ('Query fallita :'.$query);
	}
	function getCiboFromId($id) { 
		$query = "SELECT * FROM cibo WHERE id=$id"; 
		$risultato = mysql_query($query) or die('Richiesta fallita' . $query);   
		$cibo = mysql_fetch_array($risultato, MYSQL_ASSOC); 
		return $cibo; 
	}
	function inserisciOrdine (){
		$query = "insert into ordine (data,stato) values(now(),0)";
		mysql_query($query) or die('Query fallita:' . mysql_error());
		$query ="SELECT MAX(id) as id FROM ordine";
		$risultato = mysql_query($query) or die('Richiesta fallita' . $query);
		$id_ordine = mysql_fetch_array($risultato, MYSQL_ASSOC);
		return $id_ordine['id'];
	}	
	function inserisciCiboInOrdine($id, $cibo){
		$query = "insert into ordine_has_cibo (ordine_id, cibo_id) values ($id, $cibo)";
		mysql_query($query) or die('Query fallita:' . mysql_error());	
	}
?>