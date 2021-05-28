<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../element/css/banner.css">
    <link rel="stylesheet" href="../../element/css/footer.css">
    <link rel="stylesheet" href="../../element/css/footerBanner.css">
    <link rel="stylesheet" href="../../element/css/navbar.css">
    <link rel="stylesheet" href="../../element/css/slider.css">
    <link rel="stylesheet" href="../css/home.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Mle20</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            
            <p>
                <h2>MENTIONS LÉGALES</h2>
                <br>La vente d’alcool à des mineurs est interdite,<br>conformément à la loi en vigueur.<br>
                <br>En accédant à notre site de ventes,<br>vous déclarez avoir 18 ans révolus.<br>
                <br>Vous acceptez l’utilisation de [Cookies ou autres traceurs]<br>pour réaliser des statistiques de visites.<br>
                <br>
                <h2>ÊTES-VOUS MAJEUR ?</h2>
            </p>
            
            <button id="under18Years" class="confirmAge">Non, je suis mineur</button>
            <button id="over18Years"  class="confirmAge">Oui, je suis majeur</button>
        </div>

    </div>

    <!--here we put the header-->
    <div class="header__container">

        <!-- here is the top banner -->
        <?php 
            include "../../../public/element/php/top_banner.php";
            echo $header_banner;
        ?>

        <!-- here is the logo -->
        <?php 
            include "../../../public/element/php/Logo.php";
            echo $logo;
        ?>

        <!-- here is the navbar -->
        <?php 
        include "../../../public/element/php/navbar.php"; 
        echo $navbar;
        ?>

    </div>   

    <!--here we put the global home container-->
    <div id="account_slider">
        <div id="slider_header">
            <div id="close_btn">
                <p onclick="slider_hide()">X</p>
            </div>
            <a href="../../login/html/logIn.html" class="icon">
                <p>se connecter</p>
                <span class="iconify" data-icon="ant-design:login-outlined" data-inline="false" width="12%"></span>
            </a>
        </div>
        <div id="slider_profil">
            <div id="profil_picture">
                <img src="../../assets/bannerImage/account.png" id="accountImg">
            </div>
            <div id="profil_username">
                <p>Nom d'utilisateur</p>
            </div>
        </div>
    </div>

     <div class="home__container">
        <div class="slide__container">
            <div id="image-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="slide1">

                                <img src="../../assets/slider.jpg">
                                <div class="caption3">
                                    <h2>M Le 20 célèbre le vin avec bonheur</h2>

                                    <p>Vous en rêviez, nous l'avons fait !</p>
                                </div>    
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide1">
                                <img src="../../assets/wine_carousel.jpg">
                                <div class="caption2">
                                    <h2>Bien conseiller pour bien acheter</h2>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slide1">
                                <img src="../../assets/glass_wine.jpg">
                                <div class="caption1">
                                    <h2>Au moins une fois dans ma vie !</h2>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
        
        
        <div class="baseline__container">
            <div class="baseline__divider">
                <div class="small__title">
                    <h1>BIENVENUE CHEZ M LE 20</h1>
    
                </div>
                <div class="baseline">
                    <div class="baseline__title">
                        <p>M Le 20 célèbre les rencontres du vin avec bonheur </p>
                    </div>
                    <div class="baseline__description">
                        <p>Le meilleur vin c'est celui qu'on partage </p>
                    </div>
                </div>
            </div>
            
        </div>


        <div class="content__container">
            <div class="content__left scrollContent__anchor">
                <div class="content__title">
                    <h2>DÉGUSTATION & EXPÉRIENCE</h2>
                </div>
                <div class="content__description">
                    <p>
                        Au fil du temps nous vous proposons des dégustation selon l'actualité de nos producteurs.<br>
                        Vous découvrez, partagez, les vins et autres pépites de notre boutique.
                    </p>
                </div>
                <div class="content__button">
                    <a href="../../degustationsExperience/html/degustationsExperience.html" class="brk-btn">DECOUVREZ NOS DEGUSTATIONS</a>
                </div>
            </div>
            
            <div class="content__right scrollImage__anchor">
                <img src="../../assets/degustation.jpg" alt="Degustation.jpg">

            </div>
        </div>





        <div class="content__container">
            <div class="content__right scrollImage__anchor" >
                <img src="../../assets/entreprise.jpg" alt="entreprise.jpg">
            </div>
            <div class="content__leftInverted scrollContent__anchorInverted">
                <div class="content__title">
                    <h2>Espace Entreprise</h2>
                </div>
                <div class="content__description">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Soluta debitis dolore temporibus suscipit, explicabo 
                        laborum non accusamus consectetur eligendi, accusantium 
                        laboriosam ratione repudiandae minus, possimus nemo.   
                    </p>
                </div>

                <div class="content__button">
                    <a href="#" class="brk-btn">DECOUVREZ NOTRE BOUTIQUE</a>
                </div>
            </div>
        </div>

        <div class="content__container">
            <div class="content__left scrollContent__anchor">
                <div class="content__title">
                    <h2>Conciergerie</h2>
                </div>
                <div class="content__description">
                    <p>
                        Nulla vel sodales tellus, quis condimentum enim. Nunc porttitor 
                        venenatis feugiat. Etiam quis faucibus erat, non accumsan leo. 
                        Aliquam erat volutpat. Vestibulum ac faucibus eros. Cras ullamcorper 
                        gravida tellus ut consequat.
                    </p>
                </div>
                <div class="content__button">
                    <a href="../../Conciergerie/html/conciergerie.html" class="brk-btn">DECOUVREZ NOS DEGUSTATIONS</a>
                </div>
            </div>
            
            <div class="content__right scrollImage__anchor">
                <img src="../../assets/Conciergerie1.jpg" alt="conciergerie.jpg">

            </div>
        </div>

        <div class="content__container">
            <div class="content__right scrollImage__anchor" >
                <img src="../../assets/boutique.jpg" alt="boutique.jpg">
            </div>
            <div class="content__leftInverted scrollContent__anchorInverted">
                <div class="content__title">
                    <h2>Vins & Champagnes</h2>
                </div>
                <div class="content__description">
                    <p>
                        Nous sélectionnons nos vins pour le plaisir que nous avons à les déguster.<br> 
                        Nous prêtons une grande attention à ce choix.<br>
                        Il doit être conforme aux attentes que nous avons sur une appellation, un millésime, un cépage.<br>
                        L'étiquette est une promesse que nous devons retrouver dans nos verres ...<br>
                        <br>
                    </p>
                </div>

                <div class="content__button">
                    <a href="#" class="brk-btn">DECOUVREZ NOTRE BOUTIQUE</a>
                </div>
            </div>
        </div>

        <!--here we put the banner on top of footer-->
        <div class="footer__banner">
            <div class="image_container">
                <img src="../../assets/WineBanner.png" alt="Wine__bottle.jpg">
                <div class="bannerText">
                    <h2>Lorem ipsum dolor sit</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="footerBanner__bottom">
                <div class="footerBanner__title">
                    <h1>NOS ENGAGEMENTS</h1>
                </div>
                <div class="footerBanner__icono">
                    <div class="footerBanner__item">
                        <div class="text__icono">
                            <h3>Une livraison de qualité</h3>
                        </div>
                        <div class="logo__icono">
                            <span class="iconify" data-icon="mdi:truck-delivery" data-inline="false" width="30%"></span>
                        </div>
                    </div>

                    <div class="footerBanner__item">
                        <div class="text__icono">
                            <h3>Une selection exigente</h3>
                        </div>
                        <div class="logo__icono">
                            <span class="iconify" data-icon="mdi:bottle-wine" data-inline="false" width="30%"></span>
                        </div>
                    </div>
                    
                    <div class="footerBanner__item">
                        <div class="text__icono">
                            <h3>Satisfait ou remboursé</h3>

                        </div>
                        <div class="logo__icono">
                            <span class="iconify" data-icon="bi:emoji-smile-fill" data-inline="false" width="30%"></span>
                        </div>
                    </div>
                </div>
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

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script type="text/javascript" src="../js/home.js"></script>
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../element/js/slideshow.js"></script>
<script type="text/javascript" src="../js/homeScroll.js"></script>

</html>