<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <title>Eat it - Admission Restaurant</title>
        <link rel = "stylesheet" href = "css/auth.css"/>
    </head>

    <body>
        <header>
            <?php
                // include('../../General/View/navigation.php');
            ?>
        </header>

        <section class = "principale">
            <?php
                include('../Model/admissionRestaurant.php');
            ?>
        </section>
    </body>
</html>