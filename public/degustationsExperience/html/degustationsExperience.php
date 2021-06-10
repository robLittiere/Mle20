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
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Dégustation et Expérience</title>
</head>

<body>

    <!--here we put the header-->
    <div class="header__container">

        <!-- here is the top banner -->
        <?php 
            include "../../../public/element/php/top_banner.php";
            echo $header_banner;
        ?>

        <!-- here is the account -->
        <?php 
            include "../../../public/element/php/account.php";
            echo $account;
        ?>

        <!-- here is the cart -->
        <?php 
            include "../../../public/element/php/cart.php";
            echo $cart;
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

        <div class="prestige_card_container">

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Vin & Parfum</p>
                        <p>
                            Un nez issu de cet univers <br>
                            merveilleux et un expert en vin <br>
                            vous présentent l'analogie des sens
                        </p>
                    </div>
                    <button class="button prestige_btn">Vin & Parfum</button>
                    <img src="../../assets/D&E/parfum.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="50%"></span>
                    </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Vin & chocolat</p>
                        <p>
                            Subtil mariage avec l'un des <br>
                            meilleurs chocolatiers <br>
                            Français
                        </p>
                    </div>
                    <button class="button prestige_btn">Vin & chocolat</button>
                    <img src="../../assets/D&E/chocolat.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Vin & pâtisserie</p>
                        <p>
                            Accords judicieux avec les plus grands <br>
                            pâtissiers Français pour mettre en avant <br>
                            de grands vins et inversement
                        </p>
                    </div>
                    <button class="button prestige_btn">Vin & pâtisserie</button>
                    <img src="../../assets/D&E/patisserie.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Paris by wine</p>
                        <p>
                            Secret des plus grandes <br>
                            caves Parisiennes
                        </p>
                    </div>
                    <button class="button prestige_btn">Paris by wine</button>
                    <img src="../../assets/D&E/paris.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Champagne & Luxe</p>
                        <p>
                            Champagne & Caviar <br>
                            <br>
                            Champagne & Foie Gras
                        </p>
                    </div>
                    <button class="button prestige_btn">Champagne & Luxe</button>
                    <img src="../../assets/D&E/caviar.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
                </div>
            </div>

        </div>

    </div>

    <div class="pageContent" id="improbableDiv">

        <div class="improbable_card_container">

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Bar à Champagne</p>
                        <p> Bar à champagne, découverte du champagne Aubois </p>
                    </div>
                    <button class="button improbable_btn">Bar à Champagne</button>
                    <img src="../../assets/D&E/barChampagne.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Atelier de mixologie</p>
                        <p>
                            Bololololo
                        </p>
                    </div>
                    <button class="button improbable_btn">Atelier de mixologie</button>
                    <img src="../../assets/D&E/mixologie.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Champagnes et Fromages</p>
                        <p>
                            Le champagne autour d'un grand fromage français
                        </p>
                    </div>
                    <button class="button improbable_btn">Champagnes et Fromages</button>
                    <img src="../../assets/D&E/vinFromage.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
                </div>
            </div>

            <div class="prestige_element">
                <div class="img-container">
                    <div class="positioning">
                        <p class="prestige_text_title">Sauternes & Fromage, pâte persillée</p>
                        <p>
                            Le Sauternes autour d'une pâte persilléé
                        </p>
                    </div>
                    <button class="button improbable_btn">Sauternes & Fromage, pâte persillée</button>
                    <img src="../../assets/D&E/sauternePates.jpg">
                    <div class="img_overlay">
                        <span class="iconify" data-icon="fluent:cursor-20-regular" data-inline="false"
                            height="100%"></span> </div>
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
<script type="text/javascript" src="../../element/js/account.js"></script>
<script type="text/javascript" src="../../element/js/cart.js"></script>
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../home/js/homeScroll.js"></script>
<script type="text/javascript" src="../js/degustationsExperience.js"></script>

</html>