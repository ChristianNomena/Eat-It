<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Enregistrement</title>
    </head>

    <body>
        <header>
            <h1>Enregistrement</h1>
            <p>Bienvenue dans Eat It! Remplissez les informations suivantes pour enfin devenir membre</p>
        </header>

        <section>
            <form method = "post" action = "../Controller/register.php">
                <input type = "text" name = "pseudo" id = "pseudo" placeholder = "Pseudo" required/>
                <input type = "password" name = "mdp" id = "mdp" placeholder = "Mot de passe" required/>
                <input type="submit" name="valider" id="valider" value="Se Connecter"/>
            </form>
        </section>

        <footer>
            <p>Vous avez déjà un compte? <a href="login.php">Cliquez ici</a></p>
        </footer>
    </body>
</html>