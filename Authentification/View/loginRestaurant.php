<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Connexion Restaurant</title>
        <link rel = "stylesheet" href = "css/auth.css"/>
        <link rel = "stylesheet" href = "css/login.css"/>
        <link rel = "stylesheet" href = "css/loginRestaurant.css"/>
    </head>

    <body>
        <header>
            <?php
                // include('../../General/View/navigation.php');
            ?>
        </header>

        <div class = "principale">
            <div>
                <h1 class = "titre">Connexion</h1>
                <hr class = "ligne"/>
                <br/>
                <p>Bienvenue dans Eat It! Connectez-vous pour pouvoir accéder aux fonctionnalités restaurant</p>
            </div>

            <section class = "formulaire">
                <form method = "post" action = "../Model/loginRestaurant.php">
                    <input class = "remplir" type = "email" name = "mail" id = "mail" placeholder = "E-mail" required/>
                    <input class = "remplir" type = "password" name = "mdp" id = "mdp" placeholder = "Mot de passe" required/>
                    <input class = "valider" type = "submit" name = "valider" id="valider" value = "Se Connecter"/>
                </form>
            </section>

            <footer>
                <p>Vous n'êtes pas encore membre? <a id = "lien" href = "registerRestaurant.php">Cliquez ici</a></p>
            </footer>

            <?php
                // ========================= Vérification d'erreur =========================
                if(isset($_GET['error']))
                {
                    echo('<p class="error" style="visibility:visible" color="red">Veuillez vérifier toutes les informations entrées</p>');
                }
                else
                {
                    echo('<p class="error" style="visibility:hidden">Veuillez vérifier toutes les informations entrées</p>');
                }
            ?>
        </div>
    </body>
</html>