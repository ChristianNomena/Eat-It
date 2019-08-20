<?php
    session_start();
    require('../../General/Model/connexionBD.php');
    $connexion = FALSE;

    // ========================= Vérification de la connexion =========================
    $requeteLogin = $bdd->query('SELECT pseudo_cli, mdp_cli
                                 FROM client');
    while ($donneesLogin = $requeteLogin->fetch())
    {
        if (($donneesLogin['pseudo_cli'] == htmlspecialchars($_POST['pseudo'])) && ($donneesLogin['mdp_cli'] == sha1(htmlspecialchars($_POST['mdp']))))
        {
            $connexion = TRUE;
        }
    }
    $requeteLogin->closeCursor();

    // ========================= Mettre les données du client en session =========================
    if ($connexion)
    {
        $requeteLoginSession = $bdd->query('SELECT * FROM client
                                            WHERE pseudo_cli = \'' . htmlspecialchars($_POST['pseudo']) . '\'');
        if ($donneesLoginSession = $requeteLoginSession->fetch())
        {
            $_SESSION['id_connecter'] = $donneesLoginSession['id_cli'];
            $_SESSION['nom_connecter'] = $donneesLoginSession['nom_cli'];
            $_SESSION['prenom_connecter'] = $donneesLoginSession['prenom_cli'];
            $_SESSION['adresse_connecter'] = $donneesLoginSession['adresse_cli'];
            $_SESSION['tel_connecter'] = $donneesLoginSession['tel_cli'];
            $_SESSION['pseudo_connecter'] = $donneesLoginSession['pseudo_cli'];
            $_SESSION['mdp_connecter'] = $donneesLoginSession['mdp_cli'];
        }
        $requeteLoginSession->closeCursor();
        echo('Connexion établie');
    }
    else
    {
        header('location: ../View/login.php?error=true');
    }
?>