<!DOCTYPE html>
<head>
    <title>Eat It - Ajout des plats</title>
    <link rel="stylesheet" type="text/css"  href="css/ajoutPlat.css">
</head>
<body>

        <div class="principale">
                <h1>Ajout des plats</h1>

                <section class="formulaire">
                        <form method="post" action="../Model/plat.php">

                                <input type="text" name="nomPlat" placeholder="Nom du plat" required/>
                                <input type="text" name="prixPlat" placeholder="Prix du plat" required/>
                                <input type="text" name="categoriePlat" placeholder="Catégorie du plat" required/>
                                <input type="text" name="descriPlat" placeholder="Description du plat" required/>
                                <input type="file" name="imagePlat" placeholder="Image" required/>

                                <button type="submit" class="">Ajouter le plat</button>
                        </form>
        
                </section>
        </div>
</body>
</html>