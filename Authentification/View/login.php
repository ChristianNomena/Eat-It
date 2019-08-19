<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Connexion</title>
    </head>

    <body>
        <?php
            include('../../General/View/navigation.php');
        ?>
        <header>
            <h1>Connexion</h1>
            <p>Bienvenue dans Eat It! Commandez ce que vous voulez comme vous le voulez</p>
        </header>

        <section>
            <form method = "post" action = "../Model/login.php">
                <input type = "text" name = "pseudo" id = "pseudo" placeholder = "Pseudo ou E-mail" required/>
                <input type = "password" name = "mdp" id = "mdp" placeholder = "Mot de passe" required/>
                <input type = "submit" name = "valider" id="valider" value = "Se Connecter"/>
            </form>
        </section>

        <footer>
            <p>Vous n'avez pas encore de compte? <a href = "register.php">Cliquez ici</a></p>
        </footer>
    </body>
</html>