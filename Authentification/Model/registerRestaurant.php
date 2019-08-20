<?php
    require('../../General/Model/connexionBD.php');

    // ========================= Enregistrement du compte =========================
    $requeteRegister = $bdd->prepare('INSERT INTO restaurant (nom_resto, adresse_resto, tel_resto, mail_resto, mdp_resto, actif_resto)
                                      VALUES (:nom_resto, :adresse_resto, :tel_resto, :mail_resto, :mdp_resto, 0)');
    
    // ========================= Protection des données à entrer =========================
    $requeteRegister->bindParam(':nom_resto',$nom, PDO::PARAM_STR);
    $requeteRegister->bindParam(':adresse_resto',$adresse, PDO::PARAM_STR);
    $requeteRegister->bindParam(':tel_resto',$tel, PDO::PARAM_STR);
    $requeteRegister->bindParam(':mail_resto',$mail, PDO::PARAM_STR);
    $requeteRegister->bindParam(':mdp_resto',$mdp, PDO::PARAM_STR);

    $nom= htmlspecialchars($_POST['nom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $tel =htmlspecialchars($_POST['tel']);
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1(htmlspecialchars($_POST['mdp']));

    $requeteRegister->execute();
    $requeteRegister->closeCursor();

    header('location: ../View/loginRestaurant.php');
?>