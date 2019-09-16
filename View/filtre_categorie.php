<?php
session_start();
include('navbar.php');
require("../Model/connexionBD.php");
    $categorie = $_POST['categorie'];
    for($i=0; $i>=0; $i++){
        if($categorie == $_SESSION['categorie_plat'][$i]){
            $button = $i;
            echo($button);
            break;
        }
    }
    $requete = $bdd->prepare("SELECT * FROM plat WHERE categorie_plat=? ORDER BY nom_plat");
    $requete->execute(array($categorie));
    while ($plat = $requete->fetch()){ 
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="menu.css">
        <title>Menu filtré</title>
        <meta charset="utf-8">
    </head>
    <body>
    <div id="ensemble">
		<div class="menu">
            <form method="POST" action="../Model/aff_commande.php">
                <div class="plat">
                    <h1><?php echo $plat['nom_plat'] ?></h1>
                    <img src="<?php echo '../'.$plat['image_plat'] ?>" class="image" alt="TSY MANDEHA">
                    <p><?php echo $plat['descri_plat'] ?></p>
                    <h2><?php echo $plat['prix_plat'] ?> Ar</h2>
                    <button name="commander" type="Submit" value="<?php echo $button ?>" class="btn-commander" target="_self"><strong>Commander</strong></button>
                </div>
            </form>
<?php	
    }
    $requete->closeCursor();
?>
        </div>
<?php
include('commande.php')
?>
    <a href="accueil.php">Voir tout les plats</a>
    </div>
    </body>
</html>