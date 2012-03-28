<?php 
	$cibo = getCiboFromId($_GET['id_cibo']);
	$id_categoria = $cibo['categoria_id'];	
?>
<div id='dettaglio'>
	<h3><?php echo $cibo ['descrizione']?></h3>
		<img class="piatto_img2" src="images/<?php echo $cibo['immagine'] ?>" alt= "<?php echo $cibo['descrizione'] ?>"/>
	<h3> € <?php echo $cibo ['costo']?></h3>	
	<form> 
		<fieldset>
			<legend>Aggiungi</legend>
			<select name="Quantità" >
				<option value="ordina.php">1</option>
			</select>	
			<input type="submit" value="Aggiungi all'ordine"/>
		</fieldset>
	</form> 
</div> 
<div id="comanda_tav">
	 <form action="comanda_tavolo.php">
	   <input type="submit" value="IL TUO ORDINE"/>
	 </form> 
</div>

