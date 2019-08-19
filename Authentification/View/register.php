<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Enregistrement</title>
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
                <p>Bienvenue dans Eat It! Remplissez les informations suivantes pour enfin devenir membre</p>
            </div>

            <section class = "formulaire">
                <form method = "post" action = "../Model/register.php">
                    <input class = "remplir" type = "text" name = "nom" id = "nom" placeholder = "Nom" required/>
                    <input class = "remplir" type = "text" name = "prenom" id = "prenom" placeholder = "Prénom" required/>
                    <input class = "remplir" type = "text" name = "adresse" id = "adresse" placeholder = "Adresse"/>
                    <input class = "remplir" type = "text" name = "tel" id = "tel" placeholder = "Téléphone" minlength=13 maxlength=13/>
                    <input class = "remplir" type = "text" name = "pseudo" id = "pseudo" placeholder = "Pseudo" required/>
                    <input class = "remplir" type = "password" name = "mdp" id = "mdp" placeholder = "Mot de passe" required/>
                    <input class = "valider" type = "submit" name = "valider" id="valider" value = "Créer un compte"/>
                </form>
            </section>

            <footer>
                <p>Vous avez déjà un compte? <a id = "lien" href = "login.php">Cliquez ici</a></p>
            </footer>
        </div>
    </body>
</html>