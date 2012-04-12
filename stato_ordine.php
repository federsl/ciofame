<?php include_once 'includes/funzioni_cathia.php'?>
<?php 
	$ordine_inserito= $_SESSION['ordine_id'];
	$cibi_in_preparazione= getCibiInPreparazione($ordine_inserito);
	$cibi_pronti= getCibiPronti($ordine_inserito);
	$cibi_in_attesa= getCibiInAttesa ($ordine_inserito);
?>
<table>
	<tr>
		<th>Cibi in attesa</th>
		<th>Cibi in preparazione</th>
		<th>Cibi in pronti</th>
	</tr>
	<tr>
		<td>
			<ul>
			<?php foreach ($cibi_in_attesa as $cibo):
					$cibo=getCiboFromId($cibo['cibo_id']);
			?>
				<li><?php echo $cibo['descrizione']; ?></li>
			<?php endforeach; ?>
			</ul>
		</td>
		<td>
			<ul>
			<?php foreach ($cibi_in_preparazione as $cibo):
					$cibo=getCiboFromId($cibo['cibo_id']);
			?>
				<li><?php echo $cibo['descrizione']; ?></li>
			<?php endforeach; ?>
			</ul>
		</td>
		<td>
			<ul>
			<?php foreach ($cibi_pronti as $cibo):
					$cibo=getCiboFromId($cibo['cibo_id']);
			?>
				<li><?php echo $cibo['descrizione']; ?></li>
			<?php endforeach; ?>
			</ul>
		</td>
	</tr>
</table>