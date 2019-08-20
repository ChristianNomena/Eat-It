<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Accueil Administrateur</title>
        <link rel = "stylesheet" href = "css/auth.css"/>
    </head>

    <body>
        <header>
            <?php
                // include('../../General/View/navigation.php');
            ?>
        </header>

        <section class = "principale">
            <a href = "admissionRestaurant.php">Admission restaurant</a>
        </section>
    </body>
</html>