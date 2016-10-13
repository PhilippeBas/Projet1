<?php ?>
<!--///**-->
<!--// * Created by PhpStorm.-->
<!--// * User: Philippe-Basuyau-->
<!--// * Date: 13/10/2016-->
<!--// * Time: 10:24-->
<!--// */-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/styles.css" rel="stylesheet">
    <title>Keley Test Integration</title>
</head>
<!-- ------------------------------ -->
<body>
<header>
    <!--    La barre de menu de la page-->
    <nav class="navbar">
        <div class="navbar-header">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" title="Logo Orange">
                        <!--                        J'indique le chemin du logo concerné, je le decris pour les mal voyant-->
                        <img src="../images/logo.jpg" alt="Logo orange" class="imageGauche">
                        <a><b>Configurateur d'offres professionnelles</b></a>
                    </a>
                </div>
            </div>
    </nav>

    <!--    Ici la barre de nav avec les cercles-->
    <nav></nav>

</header>
<section class="col-md 12">
    <!-- Premier bloc :  -->
    <hr>
    <section class=" firstBlock col-md 9">
            <p>En souscrivant vos lignes mobiles avec votre accès internet, vous bénéficiez d'une facture unique et d'un
                tarif plus avantageux</p>
            <h3><b>Combien de lignes mobiles souhaitez-vous?</b></h3>
            <!-- ici la barre de cursuer choix -->
            <p class="reduc"> A partir de 2 lignes, bénéficiez de 10% de remise qsur l'esmsemble de vos lignes
                mobiles.</p>

    </section>
    <!-- Deuxième block : tableau des forfaits -->
    <hr>
    <section></section>
    <!--    Troisième block : durée d'engagement-->
    <hr>
    <section class="engagement">
        <h3><b>Sur quelle période souhaitez-vous vous engager?</b></h3>
        <p>
        <div class="radio">
            <label><input type="radio" name="optradio"><b>24 mois</b>(pour bénéficier du meilleur tarif)</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="optradio"><b>12 mois</b>(pour bénéficier de la durée d'engagement minimun)</label>
        </div>
        </p>
            
    </section>
    <!--    quatrième block : équipement-->
    <hr>
    <section></section>

    <!-- ------------------------------ -->
    <!--    l'aside rappel offre-->
    <hr>
    <aside class=" rappelOffre col-md-4">
            <ul class="nav nav-pills nav-stacked">
                <li role="Presentation" <!--class="active" --><a href="#">MA SELECTION</a></li>
                <li role="presentation"><a href="#">INTERNET AU BUREAU</a>
                    <p>Offre(s): Equilibre</p>
                </li>
                <li role="presentation"><a href="#">TELEPHONIE FIXE</a>
                    <p>Offre(s): Equilibre</p>
                </li>
                <li role="presentation"><a href="#">TELEPHONIE MOBILE</a>
                    <p>Offre(s):</p>
                    <p>Ligne 1 :Equilibre</p>
                </li>
            </ul>
    </aside>

</section>

<!-- ------------------------------ -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p></p>

            <!---->

                <div class="container">
                    <img src="../images/footer.png"
                         alt="image pc en pied de page"
                         class="displayed">

                 </div>
        </div>
    </div>
</footer>

</body>
</html>