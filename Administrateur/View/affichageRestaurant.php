<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Affichage Restaurant</title>
        <link rel = "stylesheet" href = "css/auth.css"/>
        <link rel = "stylesheet" href = "css/afficheResto.scss"/>
    </head>

    <body>
        <header>
            <?php
                // include('../../General/View/navigation.php');
            ?>
        </header>

        <section class = "formulaire">
            <form method = "GET" action = "../Model/acceptationRestaurant.php">
                <input class = "remplir" type = "text" name = "id" id = "id" value = "<?php $_GET['cible'] ?>" disabled/>
                <input class = "remplir" type = "text" name = "nom" id = "nom" value = "Nom Restaurant" disabled/>
                <input class = "remplir" type = "text" name = "adresse" id = "adresse" value = "Adresse Restaurant" disabled/>
                <input class = "remplir" type = "text" name = "tel" id = "tel" value = "Téléphone Restaurant" disabled/>
                <input class = "remplir" type = "text" name = "mail" id = "mail" value = "E-mail Restaurant" disabled/>
                
                <div class="switch">	
                    <input type="radio" name="choice" id="yes" value = "true">
                    <label for="yes">Ajouter</label>
                    <input type="radio" name="choice" id="no" value = "false" checked>
                    <label for="no">Refuser</label>
                    <span class="switchFilter"></span>
                </div>

                <input class = "valider" type = "submit" name = "confirmer" id="confirmer" value = "Confirmer"/>

                <button class = "btn ajout" onclick = "<?php // header('location: ../Model/acceptationRestaurant.php?ajout=true') ?>">Ajouter</button>
                <button class = "btn refus" onclick = "<?php // header('location: ../Model/acceptationRestaurant.php?ajout=false') ?>">Rejeter</button>
            </form>
        </section>
    </body>
</html>