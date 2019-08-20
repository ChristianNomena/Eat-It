<?php
    require('../../General/Model/connexionBD.php');

    // ========================= Enregistrement du compte =========================
    $requeteRegister = $bdd->prepare('INSERT INTO client (nom_cli, prenom_cli, adresse_cli, tel_cli, inscription_cli, pseudo_cli, mdp_cli)
                                      VALUES (:nom_cli, :prenom_cli, :adresse_cli, :tel_cli, now(), :pseudo_cli, :mdp_cli)');
    
    // ========================= Protection des données à entrer =========================
    $requeteRegister->bindParam(':nom_cli',$nom, PDO::PARAM_STR);
    $requeteRegister->bindParam(':prenom_cli',$prenom, PDO::PARAM_STR);
    $requeteRegister->bindParam(':adresse_cli',$adresse, PDO::PARAM_STR);
    $requeteRegister->bindParam(':tel_cli',$tel, PDO::PARAM_STR);
    $requeteRegister->bindParam(':pseudo_cli',$pseudo, PDO::PARAM_STR);
    $requeteRegister->bindParam(':mdp_cli',$mdp, PDO::PARAM_STR);

    $nom= htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $tel =htmlspecialchars($_POST['tel']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = sha1(htmlspecialchars($_POST['mdp']));

    $requeteRegister->execute();
    $requeteRegister->closeCursor();

    header('location: ../View/login.php');
?>