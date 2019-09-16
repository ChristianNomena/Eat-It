<div class="commande">
    <h1>Votre commande</h1>
    <?php
        //Récupération du commande du client
        $nb_com = $_SESSION['nb_commande'] ;
        $_SESSION['plat']['total'] = 0;

        if(isset($_SESSION['chiffre'])){
            for($i=0; $i < $nb_com; $i++){ 
                $_SESSION['plat']['total'] = $_SESSION['plat']['total'] + ($_SESSION['plat']['prix'][$i]*$_SESSION['plat']['Quantite'][$i]);
    ?>
                <form method="Post" action="../Model/suppr.php">
                    <button type="Submit" name="btn_supr" value="<?php echo $i ?>" class="btn_supr">x</button>
                </form>
                <h3>(<?php echo $_SESSION['plat']['Quantite'][$i].')'.$_SESSION['plat']['nom'][$i].'&nbsp &nbsp &nbsp &nbsp &nbsp'.$_SESSION['plat']['prix'][$i];?> Ar</h3>

    <?php
            }

        }else{
            echo('Pas de commande!');
        }
    ?>
    <h6>Total: <?php echo $_SESSION['plat']['total'];?> Ar</h6>
    <form method="Post" action="../Model/commander.php">
        <button class="btn_valider" type="Submit">Valider</button>
    </form>
</div>