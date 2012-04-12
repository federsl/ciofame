    <?php $categorie = getCategorie() ?>
	
	<?php foreach($categorie as $categoria): ?>
		<h2 <?php if($id_categoria == $categoria['id']) echo "class='attuale'"; ?>>
			<a href="index.php?action=scelta_categoria&id_categoria=<?php echo $categoria['id'] ?>">
				<?php echo strtolower($categoria['descrizione']) ?>
			</a>
		</h2>
	<?php endforeach; ?>

