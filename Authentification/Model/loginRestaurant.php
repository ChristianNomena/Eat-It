<?php
    session_start();
    require('../../General/Model/connexionBD.php');
    $connexion = FALSE;

    // ========================= Vérification de la connexion =========================
    $requeteLogin = $bdd->query('SELECT mail_resto, mdp_resto
                                 FROM restaurant
                                 WHERE actif_resto = 1');
    while ($donneesLogin = $requeteLogin->fetch())
    {
        if (($donneesLogin['mail_resto'] == htmlspecialchars($_POST['mail'])) && ($donneesLogin['mdp_resto'] == sha1(htmlspecialchars($_POST['mdp']))))
        {
            $connexion = TRUE;
        }
    }
    $requeteLogin->closeCursor();

    // ========================= Mettre les données du restaurant en session =========================
    if ($connexion)
    {
        $requeteLoginSession = $bdd->query('SELECT * FROM restaurant
                                            WHERE mail_resto = \'' . htmlspecialchars($_POST['mail']) . '\'');
        if ($donneesLoginSession = $requeteLoginSession->fetch())
        {
            $_SESSION['id_resto'] = $donneesLoginSession['id_resto'];
            $_SESSION['nom_resto'] = $donneesLoginSession['nom_resto'];
            $_SESSION['adresse_resto'] = $donneesLoginSession['adresse_resto'];
            $_SESSION['tel_resto'] = $donneesLoginSession['tel_resto'];
            $_SESSION['mail_resto'] = $donneesLoginSession['mail_resto'];
            $_SESSION['mdp_resto'] = $donneesLoginSession['mdp_resto'];
            $_SESSION['descri_resto'] = $donneesLoginSession['descri_resto'];
        }
        $requeteLoginSession->closeCursor();
        echo('Connexion établie');
    }
    else
    {
        header('location: ../View/loginRestaurant.php?error=true');
    }
?>