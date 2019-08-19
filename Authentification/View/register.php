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
            <form method = "post" action = "../Model/register.php">
                <input type = "text" name = "nom" id = "nom" placeholder = "Nom" required/>
                <input type = "text" name = "prenom" id = "prenom" placeholder = "Prénom" required/>
                <input type = "text" name = "adresse" id = "adresse" placeholder = "Adresse"/>
                <input type = "text" name = "tel" id = "tel" placeholder = "Téléphone" minlength=13 maxlength=13/>
                <input type = "text" name = "pseudo" id = "pseudo" placeholder = "Pseudo" required/>
                <input type = "password" name = "mdp" id = "mdp" placeholder = "Mot de passe" required/>
                <input type = "submit" name = "valider" id="valider" value = "Créer un compte"/>
            </form>
        </section>

        <footer>
            <p>Vous avez déjà un compte? <a href = "login.php">Cliquez ici</a></p>
        </footer>
    </body>
</html>