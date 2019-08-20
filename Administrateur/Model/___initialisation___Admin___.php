<?php
    require('../../General/Model/connexionBD.php');

    // ========================= Enregistrement du compte =========================
    $requeteRegister = $bdd->prepare('INSERT INTO administrateur (email_admin, mdp_admin)
                                      VALUES (:email_admin, :mdp_admin)');
    
    // ========================= Protection des données à entrer =========================
    $requeteRegister->bindParam(':email_admin',$email, PDO::PARAM_STR);
    $requeteRegister->bindParam(':mdp_admin',$mdp, PDO::PARAM_STR);

    $email= "admin@boss.com";
    $mdp = md5(sha1("unknown"));

    $requeteRegister->execute();
    $requeteRegister->closeCursor();
?>