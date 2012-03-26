<?php $categoria_cibi= getCibiFromCategoria($id_categoria); ?>
<?php foreach($categoria_cibi as $cibo): ?>
	<a href="index.php?action=scelta_piatto&id_cibo=<?php echo $cibo['id'] ?>">
		<img class="piatto_img" src="images/<?php echo $cibo['immagine'] ?>" alt="<?php echo $cibo['descrizione'] ?>" title="<?php echo $cibo['descrizione'] ?>"/>
	</a>
<?php endforeach; ?>


