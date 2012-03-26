<?php 
	$cibo = getCiboFromId($_GET['id_cibo']);
	$id_categoria = $cibo['categoria_id'];
?>
<div id="scelta">
	<div id="lista">
		<?php include 'lista_categoria.php';?>
	</div>
	<div id="piatti">
		<?php include 'piatti_categoria.php';?>
	</div>
	<div id="piatto" style="float: right">
		<?php include 'dettaglio_piatto.php';?>
    </div>
</div>
    
