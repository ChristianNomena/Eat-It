<?php
	session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Eat it</title>
</head>
<body>
	<?php include("navbar.php");?>
<script>
		function augmente() {
			document.getElementById("nb").innerHTML = ((document.getElementById("nb").innerHTML*1) + 1);
		}
		function soustraire() {
			document.getElementById("nb").innerHTML = ((document.getElementById("nb").innerHTML*1) - 1);
		}
</script>
	<div id="ensemble">
		<div class="menu">
		<?php
			$a = 0;
			$_SESSION['id_utilisateur']=1; //A changer par l'id de l'utilisateur
			
			if(!isset($_SESSION['nb_commande'])){
				$_SESSION['nb_commande'] = 0;
			}
			
			$id_plat = array();
			$nom_plat = array();
			$prix_plat = array();
			
			require("connexionBD.php"); //Affichage des plats
			$requete = $bdd->query("SELECT * FROM plat");
			while ($plat = $requete->fetch()){ 
			$_SESSION['id_plat'][$a] = $plat['id_plat']; //Récupération dans des sessions pour l'affichage dans commande
			$_SESSION['nom_plat'][$a] = $plat['nom_plat'];
			$_SESSION['prix_plat'][$a] = $plat['prix_plat'];
		?>
			<form method="POST" action="aff_commande.php">
				<div class="plat"><h1><?php echo $plat['nom_plat'] ?></h1>
				<img src="<?php echo $plat['image_plat'] ?>" class="image" alt="TSY MANDEHA">
				<p><?php echo $plat['descri_plat'] ?></p>
				<h2><?php echo $plat['prix_plat'] ?> Ar</h2>
				<button name="commander" type="Submit" value="<?php echo $a ?>" class="btn-commander" target="_self">Commander</button></div>
			</form>
		<?php
				$a = $a + 1;	
			}
			$requete->closeCursor();
		?>
		</div>
		
		<form action="commander.php">
		<div class="commande">
			<h1>Votre commande</h1>
			<?php
				//Récupération du commande du client
				$nb_com = $_SESSION['nb_commande'] ;
				$_SESSION['plat']['total'] = 0;
				if(isset($_SESSION['chiffre'])){
					for($i=0; $i < $nb_com; $i++){
						$_SESSION['plat']['total'] = $_SESSION['plat']['total'] + $_SESSION['plat']['prix'][$i];
						?><h3><?php echo $_SESSION['plat']['nom'][$i];?></h3>
						<h3><?php echo $_SESSION['plat']['prix'][$i];?> Ar</h3>
			<?php
					}
				}else{
					echo('Pas de commande!');
				}
			?>
			<h6>Total: <?php echo $_SESSION['plat']['total'];?> Ar</h6>
			<button type="Submit">Valider</button>
		</div>
		</form>
	</div>
</body>