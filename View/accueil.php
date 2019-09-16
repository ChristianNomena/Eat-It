<?php
	session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Eat it</title>
	<meta charset="utf-8">
</head>
<body>
	<?php include("navbar.php");?>
	<div id="ensemble">	
		<?php
			$a = 0;
			
			$id_plat = array();
			$nom_plat = array();
			$prix_plat = array();

			require("../Model/connexionBD.php");
			$req = $bdd->query("SELECT categorie_plat FROM plat");
			?>
			<form method="Post" action="filtre_categorie.php">
			<?php
				while ($cat = $req->fetch()){
			?>
					<button name="categorie" value="<?php echo $cat['categorie_plat']?>" type="submit"><?php echo $cat['categorie_plat']?></button>
			<?php
				}
				$req->closeCursor();
			?>
			</form>
		<div class="menu">
			<?php
			$requete = $bdd->query("SELECT * FROM plat ORDER BY nom_plat");
			while ($plat = $requete->fetch()){ 
				$_SESSION['id_plat'][$a] = $plat['id_plat']; //Récupération dans des sessions pour l'affichage dans commande
				$_SESSION['nom_plat'][$a] = $plat['nom_plat'];
				$_SESSION['prix_plat'][$a] = $plat['prix_plat'];
				$_SESSION['categorie_plat'][$a] = $plat['categorie_plat'];
			?>
					<!--Affichage des plats-->
				<form method="POST" action="../Model/aff_commande.php">
					<div class="plat">
						<h1><?php echo $plat['nom_plat'] ?></h1>
						<img src="<?php echo '../'.$plat['image_plat'] ?>" class="image" alt="TSY MANDEHA">
						<p><?php echo $plat['descri_plat'] ?></p>
						<h2><?php echo $plat['prix_plat'] ?> Ar</h2>
						<button name="commander" type="Submit" value="<?php echo $a ?>" class="btn-commander" target="_self"><strong>Commander</strong></button>
					</div>
				</form>
		<?php
				$a = $a + 1;	
			}
			$requete->closeCursor();
		?>
		</div>
<?php
	include('commande.php');
?>
	</div>
</body>