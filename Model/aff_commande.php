<?php
//Affichage dans commande
	session_start();
	$b = $_SESSION['nb_commande'];
	$_SESSION['chiffre'] = $_POST['commander'];//Récupération valeur du bouton
	$c = $_SESSION['chiffre'];
	
	//Regarde si le plat est déjà dans la commande
	for($i=0; $i <= $b; $i++){
		if($_SESSION['plat']['id'][$i] == $_SESSION['id_plat'][$c]){
			$test = true;
			$j = $i;//récupère où se trouve le plat dans le tableau 'plat'
			break;
		}else{
			$test = false;
		}
	}

	if($test){
		$_SESSION['plat']['Quantite'][$j] = $_SESSION['plat']['Quantite'][$j] + 1;
	}else{
		$_SESSION['plat']['id'][$b] = $_SESSION['id_plat'][$c];
		$_SESSION['plat']['nom'][$b] = $_SESSION['nom_plat'][$c];
		$_SESSION['plat']['prix'][$b] = $_SESSION['prix_plat'][$c];
		$_SESSION['plat']['Quantite'][$b] = 1;
		$_SESSION['nb_commande'] = $b + 1;
	}

	header('location:../View/accueil.php');
?>