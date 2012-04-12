<html>
	<head>Cucina</head>
		<title>Ordini Cucina</title>
		
			<link rel="stylesheet" type="text/css" href="css/backend.css">
				
		<body>
		
					<?php 
						include_once 'includes/funzioni_cathia.php';
						
						if(isset($_GET['id_ordine']) && isset($_GET['id_cibo']))
							aggiornaStatoCiboInOrdine($_GET['id_ordine'], $_GET['id_cibo']);
							
						$ordini_aperti = getOrdiniAperti();
						////includere ordini_in_cucina
					?> 
					
		


			<table width="865" align="center" height="154" border="1" cellpadding="2">
				<tr>
					<td width="259" align="center"><strong id="ordine">In Attesa</strong></td>
					<td width="259" align="center"><strong id="ordine">In Preparazione</strong></td>
					<td width="259" align="center"><strong id="ordine">Pronto </strong></td>
				</tr>
				<?php foreach($ordini_aperti as $ordine) { // prende tutti gli ordini aperti//?> 
				<tr>
					<td>
						<ul>
						<?php foreach(getCibiInAttesa($ordine['id']) as $cibo){//per ogni ordine aperto stampa tutti i cibi che trova in attesa//
										$cibo=getCiboFromId($cibo['cibo_id']);
						?>
							<li>
								<a href="preparazionecucina.php?action=prontocucina&id_ordine=<?php echo $ordine['id']?>&id_cibo=<?php echo $cibo['id'];?>">
									<img class="fotopronto"src="images/<?php echo $cibo['immagine']?>">
								</a>
							</li>
						<?php } ?>
						</ul>
					</td>
					<td>
						<ul>
						<?php foreach(getCibiInPreparazione($ordine['id']) as $cibo){//per ogni ordine aperto stampa tutti i cibi che trova in attesa//
										$cibo=getCiboFromId($cibo['cibo_id']);
						?>
							<li>
								<a href="preparazionecucina.php?action=prontocucina&id_ordine=<?php echo $ordine['id']?>&id_cibo=<?php echo $cibo['id'];?>">
									<img class="fotopronto"src="images/<?php echo $cibo['immagine']?>">
								</a>
							</li>
						<?php } ?>
						</ul>
					</td>
					<td>
						<ul>
						<?php foreach(getCibiPronti($ordine['id']) as $cibo){//per ogni ordine aperto stampa tutti i cibi che trova in attesa//
										$cibo=getCiboFromId($cibo['cibo_id']);
						?>
							<li>
								<a href="preparazionecucina.php?action=prontocucina&id_ordine=<?php echo $ordine['id']?>&id_cibo=<?php echo $cibo['id'];?>">
									<img class="fotopronto"src="images/<?php echo $cibo['immagine']?>">
								</a>
							</li>
						<?php } ?>
						</ul>
					</td>
				</tr>
				<?php } ?>
			</table>
		</body>	
</html>