<?php
    session_start();
    require('../../General/Model/connexionBD.php');
    $connexion = FALSE;

    try
    {
        //include('___initialisation___Admin___.php');
    }
    finally
    {
        // ========================= Vérification de la connexion =========================
        $requeteLogin = $bdd->query('SELECT email_admin, mdp_admin
                                     FROM administrateur');
        while ($donneesLogin = $requeteLogin->fetch())
        {
            if (($donneesLogin['email_admin'] == htmlspecialchars($_POST['mail'])) && ($donneesLogin['mdp_admin'] == md5(sha1(htmlspecialchars($_POST['mdp'])))))
            {
                $connexion = TRUE;
            }
        }
        $requeteLogin->closeCursor();

        // ========================= Mettre les données de l'administrateur en session =========================
        if ($connexion)
        {
            $requeteLoginSession = $bdd->query('SELECT * FROM administrateur
                                                WHERE email_admin = \'' . htmlspecialchars($_POST['mail']) . '\'');
            if ($donneesLoginSession = $requeteLoginSession->fetch())
            {
                $_SESSION['mail_admin'] = $donneesLoginSession['email_admin'];
                $_SESSION['mdp_admin'] = $donneesLoginSession['mdp_admin'];
            }
            $requeteLoginSession->closeCursor();
            header('location: ../View/accueilAdmin.php');
        }
        else
        {
            header('location: ../View/loginAdmin.php?error=true');
        }
    }
?>