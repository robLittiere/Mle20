<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../element/css/footer.css">
    <link href="../../element/css/banner.css" rel="stylesheet">
    <link href="../../element/css/navbar.css" rel="stylesheet">
    <link href="../css/degustationsExperiencePrestige.css" rel="stylesheet">
    <link href="../css/degustationsExperienceImprobable.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

    <!--here we put the header-->
    <div class="header__container">

        <!-- here is the top banner -->
        <?php 
            include "../../../public/element/php/top_banner.php";
            echo $header_banner;
        ?>

        <!-- here is the logo -->
        <?php 
            include "../../../public/element/php/logo.php";
            echo $logo;
        ?>

        <!-- here is the navbar -->
        <?php 
        include "../../../public/element/php/navbar.php"; 
        echo $navbar;
        ?>

    </div>

    <div class="menuBar">
        <div id="atelierDegustation" class="menuBarContent" onclick="showIt(this);"> Atelier degustation
        </div>
        <div id="prestige" class="menuBarContent" onclick="showIt(this);"> Préstige
        </div>
        <div id="improbable" class="menuBarContent" onclick="showIt(this);"> Improbable
        </div>
        <div id="baladeGustative" class="menuBarContent" onclick="showIt(this);"> Balades gustative
        </div>
        <div id="soiree" class="menuBarContent" onclick="showIt(this);"> Soirée
        </div>
        <div id="seminaire" class="menuBarContent" onclick="showIt(this);"> séminaire
        </div>
        <div id="incentive" class="menuBarContent" onclick="showIt(this);"> Incentive
        </div>
        <div id="demandeDeDevis" class="menuBarContent" onclick="showIt(this);"> Demande de devis
        </div>
    </div>

    <div class="pageContent" id="atelierDegustationDiv">
    </div>

    <div class="pageContent" id="prestigeDiv">

        <div id="prestige_title">
            <p>Nos expers excellent dans l'univers de prédilection sur lequel nous allons les chercher</p>
        </div>

        <div id="prestige_Verticale_horizontale">

            <div id="prestige_Verticale_horizontale_underTitle_container">

                <div class="underTitle_sideBorder"></div>

                <div id="prestige_Verticale_horizontale_underTitle">
                    <p>Grands vins Français</p>
                </div>

                <div class="underTitle_sideBorder"></div>

            </div>

            <div id="prestige_Verticale_horizontale_title">

                <div id="prestige_verticale_title">
                    <p>Verticale</p>
                    <div id="prestige_verticale_underTitle">
                        <p>Différents millésimes, autour d'un même <br> château, domaine...</p>
                    </div>
                </div>

                <div id="prestige_horizontale_title">
                    <p>Horizontale</p>
                    <div id="prestige_horizontale_underTitle">
                        <p>Découvrez une apellation au travers de <br> différentes propriétés</p>
                    </div>
                </div>

            </div>

        </div>

        <div id="prestige_Verticale_horizontale_underTitle_container">

            <div class="underTitle_sideBorder"></div>

            <div id="prestige_Verticale_horizontale_underTitle">
                <p>Dégustations Prestigieuses</p>
            </div>

            <div class="underTitle_sideBorder"></div>

        </div>

        <div id="prestige_container">

            <div class="prestige_element">
                <div class="element_img">
                    <img src="../../assets/D&E/chloeColor.jpg">
                    <div class="centered">
                        <p class="element_title">Vin & Parfum</p>
                        <p>
                            Un nez issu de cet univers <br>
                            merveilleux et un expert en vin <br>
                            vous présentent l'analogie des sens
                        </p>
                    </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="element_img">
                    <img src="../../assets/D&E/chocolat.jpg">
                    <div class="centered">
                        <p class="element_title">Vin & chocolat</p>
                        <p>
                            Subtil mariage avec l'un des <br>
                            meilleurs chocolatiers <br>
                            Français
                        </p>
                    </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="element_img">
                    <img src="../../assets/D&E/cookcoeurDraw.jpg">
                    <div class="centered">
                        <p class="element_title">Vin & pâtisserie</p>
                        <p>
                            Accords judicieux avec les plus grands <br>
                            pâtissiers Français pour mettre en avant <br>
                            de grands vins et inversement
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div id="prestige_container">

            <div class="prestige_element">
                <div class="element_img">
                    <img src="../../assets/D&E/paris.jpg">
                    <div class="centered">
                        <p class="element_title">Paris by wine</p>
                        <p>
                            Secret des plus grandes <br>
                            caves Parisiennes
                        </p>
                    </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="element_img">
                    <img src="../../assets/D&E/caviar.jpg">
                    <div class="centered">
                        <p class="element_title">Champagne & Luxe</p>
                        <p>
                            Champagne & Caviar <br>
                            <br>
                            Champagne & Foie Gras
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="pageContent" id="improbableDiv">

        <div id="improbable_content">

            <div class="improbable_element">

                <div class="element_img">
                    <img src="../../assets/steve-daniel-owBAs8Z0hzg-unsplash.jpg">
                    <div class="centered">
                        <p class="element_title">Bar à Champagne</p>
                        <p class="element_text">Bar à champagne, découverte du champagne Aubois</p>
                    </div>
                </div>

            </div>

            <div class="improbable_element">

                <div class="element_img">
                    <img src="../../assets/sanja-simic-U9-bDlyrI-o-unsplash.jpg">
                    <div class="centered">
                        <p class="element_title">Atelier de mixologie</p>
                        <p class="element_text">Bololololo</p>
                    </div>
                </div>

            </div>

            <div class="improbable_element">

                <div class="element_img">
                    <img src="../../assets/the-creative-exchange-Q5OpcL166e8-unsplash.jpg">
                    <div class="centered">
                        <p class="element_title">Champagnes et Fromages</p>
                        <p class="element_text">Le champagne autour d'un grand fromage français</p>
                    </div>
                </div>

            </div>

            <div class="improbable_element">

                <div class="element_img">
                    <img src="../../assets/karelys-ruiz-_9z0iErDrdk-unsplash.jpg">
                    <div class="centered">
                        <p class="element_title">Sauternes & Fromage, pâte persillée</p>
                        <p class="element_text">Le Sauternes autour d'une pâte persilléé</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="pageContent" id="baladeGustativeDiv">
        <div id="prestige_title">
            <p>
                Nos expériences se déroulent en compagnie d'experts <br>
                reconnus dans leur domaine de compétences
            </p>
        </div>

        <div id="prestige_Verticale_horizontale_underTitle_container">

            <div class="underTitle_sideBorder"></div>
            <div id="prestige_Verticale_horizontale_underTitle">
                <p>Balades Gustatives</p>
            </div>
            <div class="underTitle_sideBorder"></div>

        </div>


    </div>

    <div class="pageContent" id="soireeDiv">
    </div>

    <div class="pageContent" id="seminaireDiv">
    </div>

    <div class="pageContent" id="incentiveDiv">
    </div>

    <div class="pageContent" id="demandeDeDevisDiv">
    </div>

</body>

<!--here we put the footer-->
<?php 
    include "../../../public/element/php/footer.php"; 
    echo $footer;
?>
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../home/js/homeScroll.js"></script>
<script type="text/javascript" src="../js/degustationsExperience.js"></script>

</html>