<?php
//Affichage dans commande
	session_start();
	$b = $_SESSION['nb_commande'];
	$_SESSION['chiffre'] = $_POST['commander'];
	$c = $_SESSION['chiffre'];
	$_SESSION['plat']['id'][$b] = $_SESSION['id_plat'][$c];
	$_SESSION['plat']['nom'][$b] = $_SESSION['nom_plat'][$c];
	$_SESSION['plat']['prix'][$b] = $_SESSION['prix_plat'][$c];
	$_SESSION['nb_commande'] = $b + 1;
	header('location:menu.php');
?>