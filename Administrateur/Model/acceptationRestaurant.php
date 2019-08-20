<?php
    session_start();
    require('../../General/Model/connexionBD.php');

    // ========================= Vérification des restaurants non admis =========================
    $requeteResto = $bdd->query('SELECT id_resto, nom_resto
                                 FROM restaurant
                                 WHERE actif_resto = 0');
    while ($donneesResto = $requeteResto->fetch())
    {
        echo($donneesResto['nom_resto'] . ' ' . '<a href = "../View/affichageRestaurant.php?cible=$donneesResto[\'id_resto\']">Voir</a>');
    }
    $requeteResto->closeCursor();
?>