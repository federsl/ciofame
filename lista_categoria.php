<div id="sidebar1">
    <?php $categorie = getCategorie() ?>
	<ul>
	    <?php foreach($categorie as $categoria): ?>
		<li><a href="index.php?action=scelta_categoria&id_categoria=<?php echo $categoria['id'] ?>"><?php echo $categoria['descrizione'] ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>