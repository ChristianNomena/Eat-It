<?php
    session_start();
    require("connexionBD.php");
    $chiffre = $_POST['btn_supr'];
    $nb = $_SESSION['nb_commande'];
    for($i=$chiffre; $i < $nb - 1; $i++){//reculer les autres plats dans le tableau
        $_SESSION['plat']['id'][$i] =  $_SESSION['plat']['id'][$i+1];
        $_SESSION['plat']['nom'][$i] =  $_SESSION['plat']['nom'][$i+1];
        $_SESSION['plat']['prix'][$i] =  $_SESSION['plat']['prix'][$i+1];
        $_SESSION['plat']['Quantite'][$i] =  $_SESSION['plat']['Quantite'][$i+1];
    }
    $_SESSION['nb_commande'] = $_SESSION['nb_commande'] - 1;
    header('location:menu.php');
?>