<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Connexion</title>
        <link rel = "stylesheet" href = "css/auth.css"/>
        <link rel = "stylesheet" href = "css/login.css"/>
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
                <p>Bienvenue dans Eat It! Commandez ce que vous voulez comme vous le voulez</p>
            </div>

            <section class = "formulaire">
                <form method = "post" action = "../Model/login.php">
                    <input class = "remplir" type = "text" name = "pseudo" id = "pseudo" placeholder = "Pseudo" required/>
                    <input class = "remplir" type = "password" name = "mdp" id = "mdp" placeholder = "Mot de passe" required/>
                    <input class = "valider" type = "submit" name = "valider" id="valider" value = "Se Connecter"/>
                </form>
            </section>

            <footer>
                <p>Vous n'avez pas encore de compte? <a id = "lien" href = "register.php">Cliquez ici</a></p>
            </footer>

            <?php
                // ========================= Vérification d'erreur =========================
                if(isset($_GET['error']))
                {
                    echo('<p id="error" style="visibility:visible">Veuillez vérifier les informations</p>');
                }
                else
                {
                    echo('<p id="error" style="visibility:hidden">Veuillez vérifier les informations</p>');
                }
            ?>
        </div>
    </body>
</html>