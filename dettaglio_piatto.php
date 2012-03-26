<?php 
	$cibo = getCiboFromId($_GET['id_cibo']);
	$id_categoria = $cibo['categoria_id'];	
?>
<div id='dettaglio'>
	<h3><?php echo $cibo ['descrizione']?></h3>
		<a href="index.php?action=scelta_piatto&id_cibo=<?php echo $cibo['id'] ?>"></a>
		<img class="piatto_img2" src="images/<?php echo $cibo['immagine'] ?>" alt= "<?php echo $cibo['descrizione'] ?>"/>
	<h3> € <?php echo $cibo ['costo']?></h3>	
	<form> 
		<fieldset>
			<legend>Quantità</legend>
			<select name="Quantità" >
				<option value="ordina.php" selected="selected">1  </option>
				<option value="ordina.php">2</option>
				<option value="ordina.php">3</option>
				<option value="ordina.php">4</option>
				<option value="ordina.php">5</option>
				<option value="ordina.php">6</option>
				<option value="ordina.php">7</option>
				<option value="ordina.php">8</option>
				<option value="ordina.php">9</option>
				<option value="ordina.php">10</option>
			</select>	
			<input type="submit" value="Aggiungi all'ordine" class="input" />
		</fieldset>
	</form> 
 </div>
