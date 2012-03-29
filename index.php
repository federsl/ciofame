<?php session_start() ?>
<?php $_SESSION['ordine'] = array()?>
<?php include ('includes/funzioni_fede.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>HAL Restaurant</title>
		<link rel="stylesheet" type="text/css" href="css/stile.css">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		
    </head>
    <body>
		<?php		if (! isset($_GET['action']) || $_GET['action'] == 'benvenuto'): ?>
        <a href="index.php?action=scelta_categoria"><img class="index" src="images/sfondo.gif" alt="Benvenuto" /></a>
        <?php else: ?>
		<?php require $_GET['action'].'.php'; ?>
		<?php endif; ?>
    </body>
</html>