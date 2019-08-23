<?php

        $nom_Plat_Ajout = $_POST["nomPlat"];
        $prix_Plat_Ajout = $_POST["prixPlat"];
        $descri_Plat_Ajout = $_POST["descriPlat"];
        $image_Plat_Ajout = $_POST["imagePlat"];
        $categorie_Plat_Ajout = $_POST["categoriePlat"];


        require("connexionBD.php");

        $req = $bdd->prepare("INSERT INTO plat(nom_plat, prix_plat, descri_plat, image_plat, categorie_plat) VALUES('$nom_Plat_Ajout', $prix_Plat_Ajout, '$descri_Plat_Ajout','$image_Plat_Ajout', '$categorie_Plat_Ajout')");
        $req->execute() or die(print_r($req->errorInfo(), TRUE));
        $req->closeCursor();


?>