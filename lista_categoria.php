    <?php $categorie = getCategorie() ?>
	
	<?php foreach($categorie as $categoria): ?>
		<h2 id="cat">
			<a href="index.php?action=scelta_categoria&id_categoria=<?php echo $categoria['id'] ?>">
				<?php echo $categoria['descrizione'] ?>
			</a>
		</h2>
	<?php endforeach; ?>

