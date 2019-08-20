<!DOCTYPE html>
<head>
    <title>Eat It</title>
    <link rel="stylesheet" type="text/css"  href="ajoutPlat.css">
</head>
<body>

        <h1>Ajout des plats</h1>

        <form method="post" action="plat.php">

                Nom du plat : <br>
                <input type="text" name="nomPlat"><br>

                Prix du plat : <br>
                <input type="text" name="prixPlat"><br>

                Catégorie du plat : <br>
                <input type="text" name="categoriePlat"><br>

                Description du plat : <br>
                <input type="text" name="descriPlat"><br>

                Image : <br>
                <input type="file" name="imagePlat"><br>

                <button type="submit" class="">Ajouter le plat</button>
        </form>
    
</body>
</html>