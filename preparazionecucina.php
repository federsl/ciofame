<html>
	<head></head>
		<title>Cucina</title>
		
			<link rel="stylesheet" type="text/css" href="backend.css">
				
		<body>
		
				<div id= "img_cucina" align="center"><img src="images/head1.jpg" alt="Cucina"></div>
				<div id="div_script"></div>
						
					<?php 
						include_once 'includes/funzioni_cathia.php';
						include_once 'includes/funzioni_fede.php';
						
						if(isset($_GET['id_ordine']) && isset($_GET['id_cibo']))
							aggiornaStatoCiboInOrdine($_GET['id_ordine'], $_GET['id_cibo']);
							
						$ordini_aperti = getOrdiniAperti();
						
					?> 
					
				
			<table width="800" align="center" height="154" border="4" cellpadding="2">
				<tr>
					<td width="259" align="center"><strong id="ordine">In Attesa</strong></td>
					<td width="259" align="center"><strong id="ordine">In Preparazione</strong></td>
					<td width="259" align="center"><strong id="ordine">Pronto </strong></td>
				</tr>
				<?php foreach($ordini_aperti as $ordine){ // prende tutti gli ordini aperti//?> 
				<tr>
					<td>
						<dl>
						<?php foreach(getCibiInAttesa($ordine['id']) as $cibo_in_attesa){//per ogni ordine aperto stampa tutti i cibi che trova in attesa//
										$cibo=getCiboFromId($cibo_in_attesa['cibo_id']);
						?>
							<dt>
								<a href="preparazionecucina.php?action=prontocucina&id_ordine=<?php echo $ordine['id']?>&id_cibo=<?php echo $cibo['id'];?>">
									<img class="fotopronto"src="images/<?php echo $cibo['immagine']?>" width="100" height="80"><?php echo $cibo['descrizione']?>
								</a>
							</dt>
						<?php } ?>
						</dl>
					</td>
					<td>
						<dl>
						<?php foreach(getCibiInPreparazione($ordine['id']) as $cibo){//per ogni ordine aperto stampa tutti i cibi che trova in attesa//
										$cibo=getCiboFromId($cibo['cibo_id']);
						?>
							<dt>
								<a href="preparazionecucina.php?action=prontocucina&id_ordine=<?php echo $ordine['id']?>&id_cibo=<?php echo $cibo['id'];?>">
									<img class="fotopronto" src="images/<?php echo $cibo['immagine']?>" width="100" height="80"><?php echo $cibo['descrizione']?>
								</a>
							</dt>
						<?php } ?>
						</dl>
					</td>
					<td>
						<dl>
						<?php foreach(getCibiPronti($ordine['id']) as $cibo){//per ogni ordine aperto stampa tutti i cibi che trova in attesa//
										$cibo=getCiboFromId($cibo['cibo_id']);
						?>
							<dt>
								<a href="preparazionecucina.php?action=prontocucina&id_ordine=<?php echo $ordine['id']?>&id_cibo=<?php echo $cibo['id'];?>">
									<img class="pronto" src="images/<?php echo $cibo['immagine']?>" width="120" height="100">
								</a>
							</dt>
						<?php } ?>
						</dl>
					</td>
				</tr>
				<?php } ?>
			</table>
		</body>	
</html>