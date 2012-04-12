<?php include_once 'includes/funzioni_cathia.php'?>
<?php 
	$ordine_inserito= $_SESSION['ordine_id'];
	$cibi_in_preparazione= getCibiInPreparazione($ordine_inserito);
	$cibi_pronti= getCibiPronti($ordine_inserito);
	$cibi_in_attesa= getCibiInAttesa ($ordine_inserito);
?>
<div id="stato_ordine">
		<div><img id="colonna1"src="images/piattiattesa.gif"></div>
		<div><img id="colonna2"src="images/piattipreparazione.gif"></div>
		<div><img id="colonna3"src="images/piattipronti.gif"></div>
<table>
	<tr>
		<td>
			<ul>
				<?php foreach ($cibi_in_attesa as $cibo):
					$cibo=getCiboFromId($cibo['cibo_id']);
				?>
				<li><?php echo strtolower ($cibo['descrizione']); ?></li>
				<?php endforeach; ?>
			</ul>
		</td>		
		<td>
			<ul>
				<?php foreach ($cibi_in_preparazione as $cibo):
						$cibo=getCiboFromId($cibo['cibo_id']);
				?>
					<li><?php echo strtolower ($cibo['descrizione']); ?></li>
				<?php endforeach; ?>
				</ul>
		</td>
		<td>
			<ul>
				<?php foreach ($cibi_pronti as $cibo):
						$cibo=getCiboFromId($cibo['cibo_id']);
				?>
					<li><?php echo strtolower ($cibo['descrizione']); ?></li>
				<?php endforeach; ?>
			</ul>
		</td>
	</tr>
	<img class="pentole"src="images/pentole.gif">
</table>
