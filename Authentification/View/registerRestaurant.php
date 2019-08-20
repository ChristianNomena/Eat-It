<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Enregistrement Restaurant</title>
        <link rel = "stylesheet" href = "css/auth.css"/>
    </head>

    <body>
        <header>
            <?php
                // include('../../General/View/navigation.php');
            ?>
        </header>

        <div class = "principale">
            <div>
                <h1 class = "titre">Enregistrement</h1>
                <hr class = "ligne"/>
                <br/>
                <p>Bienvenue dans Eat It! Remplissez les informations suivantes afin d'envoyer à l'administrateur votre demande d'adhésion</p>
            </div>

            <section class = "formulaire">
                <form method = "post" action = "../Model/registerRestaurant.php">
                    <input class = "remplir" type = "text" name = "nom" id = "nom" placeholder = "Nom" required/>
                    <input class = "remplir" type = "text" name = "adresse" id = "adresse" placeholder = "Adresse"/>
                    <input class = "remplir" type = "tel" name = "tel" id = "tel" placeholder = "Téléphone" minlength=13 maxlength=13/>
                    <input class = "remplir" type = "email" name = "mail" id = "mail" placeholder = "E-mail" required/>
                    <input class = "remplir" type = "password" name = "mdp" id = "mdp" placeholder = "Mot de passe" required/>
                    <input class = "valider" type = "submit" name = "valider" id="valider" value = "Envoyer la demande"/>
                </form>
            </section>

            <footer>
                <p>Vous êtes déjà membre? <a id = "lien" href = "loginRestaurant.php">Cliquez ici</a></p>
            </footer>
        </div>
    </body>
</html>