<?php $categoria_cibi= getCibiFromCategoria($_GET['id_categoria']); ?>
	<ul>
	    <?php foreach($categoria_cibi as $cibo): ?>
		<li>
		  <a href="index.php?action=scelta_categoria&id_categoria&piatti_categoria=<?php echo $cibo['categoria_id'] ?>">
		    <img src="images/<?php echo $cibo['immagine'] ?>" alt="<?php echo $cibo['descrizione'] ?>" />
		  </a>
		</li>
		<?php endforeach; ?>
	</ul>


