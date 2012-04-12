<link rel="stylesheet" type="text/css" href="css/stile.css">
<div id="scelta">
	<div id="titolo">
		<img src="images/ordine.gif">
	</div>
	<div id="robot">
		<img class="robot_img" src="images/robot_ordina.gif">
	</div>
	<div id="comanda">
		<img class="comanda" src="images/notes.gif">
			<div id="cibi_scelti">
				<ul>
					<?php foreach ($_SESSION['ordine'] as $id => $quantita): ?>
					  <?php $cibotemp = getCiboFromId($id); ?>
					  <li><?php echo strtolower ($cibotemp['descrizione'].': '.$quantita) ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
	</div>
	<div id="indietro">
			<?php $cibo = getCiboFromId($_GET['id_cibo']);?>
			<a href="index.php?action=scelta_piatto&id_cibo=<?php echo $cibo['id'] ?>"><img src="images/indietro.gif" alt="torna indietro" title="torna indietro" width="157" 
			height="51"></a>
		</div>
	<div id="chiudo">
		<a href="index.php?action=ordine"><img class="invia" src="images/invia.gif" alt="invia il tuo ordine" title="invia il tuo ordina "/></a>
	</div>
</div>
