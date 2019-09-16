<?php
	$_SESSION['id_utilisateur']=1; //A changer par l'id de l'utilisateur
			
	if(!isset($_SESSION['nb_commande'])){ //Met le nb_commande à 0 s'il n'y a pas encore de commande
		$_SESSION['nb_commande'] = 0;
	}
?>
<head>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	<div class="navbar">
		<a id="logo" href=""><strong>Eat it</strong></a>
		<a id="connexion" href="">Se connecter</a>
		<form method="Post" action="recherche.php">
			<div class="search"><button type="submit" style="float:right" class="btnsearch">Go!</button>
			<input type="text" placeholder="Chercher..." style="float:right" name="recherche"></div>
		</form>
	</div>
</body>