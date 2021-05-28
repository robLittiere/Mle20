<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mle20_Boutique</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../element/css/footer.css">
        <link href="../css/store.css" rel="stylesheet">
        <link href="../../element/css/banner.css" rel="stylesheet">
        <link href="../../element/css/navbar.css" rel="stylesheet">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<<<<<<< Updated upstream:public/store/html/store.php
=======
                    <div>
                        <img src="../../assets/bannerImage/Cart.png">
                    </div>

                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#" class="cart" id="cart">Panier</a>
                        <div id="cartContain">
                            <a href="#" class="cart" id="cartEnd"></a>
                        </div>
                    </div>

                    <div id="sidenavBlur">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    </div>

                </div>

            </div>
        </div>
    
        <div class="logo__container">
            <img id="logo" src="../../assets/logo.jpg" alt="logo">
            <h1>Champagnes, Vins & Events</h1>
            <h3>Expériences dédiées aux meilleurs vins</h3>
        </div>

        <div class="navbar">
            <div class="header_bottom">
                <a href="../../home/html/home.html" class="header__button">Accueil</a>
                <a href="../../degustationsExperience/html/degustationsExperience.html" id="experience__button" class="header__button">Degustations & Expériences</a>
                <a href="#" id="company__button" class="header__button">Espace Entreprise</a>
                <a href="../../Conciergerie/html/conciergerie.html" id="conciergerie__button" class="header__button">Conciergerie</a>
                <a href="../../Partenariat/Partenariat.html" id="partner__button" class="header__button">Partenaires</a>
                <a href="../../store/html/store.html" id="store__button" class="header__button">Boutique</a>
                <a href="about.html" id="infos__button" class="header__button">Qui sommes nous ?</a>
                <a href="../../contact/html/contact.html" id="contact__button" class="header__button">Contacts</a>
            </div>    
            <div id="store__popup">
                <a href="#" class="popup__button">Vin</a>
                <a href="#" class="popup__button">Champagne</a>
                <a href="#" class="popup__button">Coffret Cadeau</a>
                <a href="#" class="popup__button">Evenement</a>
                <a href="#" class="popup__button">Autres</a>
            </div>
            <div id="experience__popup">
                <a href="#" class="popup__button">Atelier dégustation</a>
                <a href="#" class="popup__button">Prestige</a>
                <a href="#" class="popup__button">Improbable</a>
                <a href="#" class="popup__button">Grands vins français</a>
                <a href="#" class="popup__button">Privatiser (sur mesure)</a>
                <a href="#" class="popup__button">Balades gustatives)</a>
                <a href="#" class="popup__button">Soirée</a>
                <a href="#" class="popup__button">Séminaire</a>
                <a href="#" class="popup__button">Demande de devis</a>
            </div>
            <div id="company__popup">
                <a href="#" class="popup__button">Idée cadeaux</a>
                <a href="#" class="popup__button">Pack entreprise</a>
                <a href="#" class="popup__button">Concept sur mesure</a>
                <a href="#" class="popup__button">Etude de faisabilité</a>
                <a href="#" class="popup__button">Voyage à thème : dégustation, gastronomie, sport</a>
                <a href="#" class="popup__button">Ils nous font confiance</a>
            </div>
            <div id="conciergerie__popup">
                <a href="#" class="popup__button">Conseil & Stratégie</a>
                <a href="#" class="popup__button">Achat vin</a>
                <a href="#" class="popup__button">Achat Primeur</a>
                <a href="#" class="popup__button">Audit Cave</a>
                <a href="#" class="popup__button">Expérience unique</a>
                <a href="#" class="popup__button">Expérience VIP</a>
                <a href="#" class="popup__button">Vins et millésimes rares</a>
            </div>
            <div id="partner__popup">
                <a href="../../Partenariat/bulleDeLAube.html" class="popup__button">Bulles de l'Aube</a>
                <a href="../../Partenariat/movember.html" class="popup__button">DoYouMovember</a>
                <a href="../../Partenariat/patriwine.html" class="popup__button">Patriwine</a>
                <a href="../../Partenariat/chateauleoube.html" class="popup__button">Château Léoube</a>
                <a href="#" class="popup__button">Terra Hominis</a>
                <a href="../../Partenariat/cookcoeur.html" class="popup__button">Cookcoeur</a>
                <a href="#" class="popup__button">Boutique Versailles</a>
                <a href="#" class="popup__button">Vignerons disponibles</a>
            </div>
            <div id="contact__popup">
                <a href="../../contact/html/contact.html" class="popup__button">Formulaire</a>
                <a href="#" class="popup__button">Adresse1</a>
                <a href="#" class="popup__button">Adresse2</a>
                <a href="#" class="popup__button">Adresse3</a>
                <a href="#" class="popup__button">Téléphone</a>
            </div>
            <div id="infos__popup">
                <a href="../../about/html/about.html" class="popup__button">Histoire de l'aventure</a>
                <a href="../../about/html/about.html" class="popup__button">Portrait</a>
                <a href="../../about/html/about.html" class="popup__button">Comité de sélection</a>
            </div>
        </div>
>>>>>>> Stashed changes:public/store/html/store.html
    </div>    

    <!--here we put the store container-->
    <div class="store__container">

        <div id="popup">

            <div class="popupContent">

                <div id="popupDescription">

                    <div class="popupImg">
                        <img src="../wineImg/wine.webp" id="popupImgContain">
                    </div>
                    
                    <div id="popupText">
                        <div id="popupTextName">
                            <p>demi bouteille tradition brut</p>
                        </div>
                        
                        <div id="popupTextDescription">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            </p>
                        </div>
                    </div>
                    
                </div>

                <div id="closePopupBtn">
                    <a id="popupBtn">fermer</a>
                </div>

            </div>
            
        </div>

        <div id="storeContain">

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/Love by leoube rose.png" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>LOVE BY LÉOUBE ROSÉ 6x75cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin rosé bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2020</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">84,00 €/ Ajouter au panier</a>
                </div>

            </div> 

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/love by leoube rouge.png" id="lvrouge" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>LOVE BY LÉOUBE ROUGE 6x75cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin rouge bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2019</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">84,00 €/ Ajouter au panier</a>
                </div>

            </div> 

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/love by leoube blanc.png" id="lvblanc" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>LOVE BY LÉOUBE BLANC 6x75cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin blanc bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2020</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">84,00 €/ Ajouter au panier</a>
                </div>

            </div>

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/rose de leoube.png" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>ROSÉ DE LÉOUBE 75cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2019</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">19,00 €/ Ajouter au panier</a>
                </div>

            </div>

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/rouge de leoube.png" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>ROUGE DE LÉOUBE 75cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence rouge</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin rouge bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2018</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">21,00 €/ Ajouter au panier</a>
                </div>

            </div>

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/blanc de leoube.png" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>BLANC DE LÉOUBE 75cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin blanc bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2020</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">21,00 €/ Ajouter au panier</a>
                </div>

            </div>

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/Magnum rose leoube.png" id="Mrose" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>MAGNUM ROSÉ DE LÉOUBE 150cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2020</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">40,00 €/ Ajouter au panier</a>
                </div>

            </div>

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/Magnum rouge leoube.png" id="Mrouge" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>MAGNUM ROUGE DE LÉOUBE 150cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin rouge bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2018</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">44,00 €/ Ajouter au panier</a>
                </div>

            </div>

            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/Magnum blanc leoube.png" id="Mblanc" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>MAGNUM BLANC DE LÉOUBE 150cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin blanc bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2019</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">44,00 €/ Ajouter au panier</a>
                </div>

            </div>


            <div class="storeElement">

                <div class="elementImg">
                    <img src="../wineImg/jeroboam rose leoube.jpeg" id="Jrose" class="image">

                    <div class="imageButton">
                        <a class="text">En savoir plus</a>
                    </div>
                </div>

                <div id="elementName" class="elementDescription">
                    <div class="elementName">
                        <p>JEROBOAM ROSÉ DE LÉOUBE 300cl</p>
                    </div>

                    <div class="region">
                        <p>Côtes de Provence</p>
                    </div>

                    <div class="elementAppellation">
                        <p>Vin bio</p>
                    </div>

                    <div id="elementVintage" class="elementVintage">
                        <p>2019</p>
                    </div>
                </div>


                <div id="elementPrice" class="elementPrice">
                    <a class="btn">105,00 €/ Ajouter au panier</a>
                </div>

            </div>


        </div>

    </div>

   

</body>
<!--here we put the footer-->
<?php 
    include "../../../public/element/php/footer.php"; 
    echo $footer;
?>

    <script type="text/javascript" src="../js/store.js"></script>
    <script type="text/javascript" src="../../element/js/navbar.js"></script>
    <script type="text/javascript" src="../../home/js/homeScroll.js"></script>

</html>
