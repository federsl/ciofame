<?php 
$ordine_inserito= inserisciOrdine ();
foreach ($_SESSION['ordine'] as $id_cibo => $quantita)
{
	inserisciCiboInOrdine($ordine_inserito, $id_cibo);
}
unset ($_SESSION['ordine']);
$_SESSION['ordine']= $ordine_inserito;
include 'stato_ordine.php';
?>



 