<?php
//Introduction commande dans Base de données
	session_start();
	require("connexionBD.php");
	$nb_com = $_SESSION['nb_commande'] ;
	$id_user = $_SESSION['id_utilisateur'];
	for($i=0; $i< $nb_com; $i++){
		$id_plat = $_SESSION['plat']['id'][$i];
		$qte = $_SESSION['plat']['Quantite'][$i];
		$req = $bdd->prepare("INSERT INTO commander(id_plat,id_cli,date_commande,quantite) VALUES($id_plat, $id_user, NOW(), $qte)");
		$req->execute()
		or die(print_r($req->errorInfo(), TRUE));
		$_SESSION['plat']['id'][$i] = NULL;
		$_SESSION['plat']['nom'][$i] = NULL;
		$_SESSION['plat']['prix'][$i] = NULL;
		$_SESSION['plat']['Quantite'][$i] = NULL;
	}
	$req->closeCursor();
	$_SESSION['chiffre'] = NULL;
	$_SESSION['nb_commande'] = NULL;
	header('location:../View/menu.php');
?>