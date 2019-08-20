<?php
//Introduction commande dans Base de données
	session_start();
	require("connexionBD.php");
	$nb_com = $_SESSION['nb_commande'] ;
	$id_user = $_SESSION['id_utilisateur'];
	for($i=0; $i< $nb_com; $i++){
		$id_plat = $_SESSION['plat']['id'][$i];
		$req = $bdd->prepare("INSERT INTO commander VALUES($id_plat, $id_user, CURDATE())");
		$req->execute()
		or die(print_r($req->errorInfo(), TRUE));
		$req->closeCursor();
	}
	header('location:menu.php');
?>