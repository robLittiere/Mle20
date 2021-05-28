<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../element/css/banner.css">
    <link rel="stylesheet" href="../../element/css/footer.css">
    <link rel="stylesheet" href="../../element/css/navbar.css">
    <link rel="stylesheet" href="../../element/css/slider.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link href="../css/conciergerie.css" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Mle20 Conciergerie</title>
</head>
<body>

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
  

    <!--here we put the global contact container-->
     
    <div class="home__container">
        
        <div class="baseline__container">
            <div class="baseline__divider">
                <div class="small__title">
                    <h1>CONCIERGERIE</h1>
    
                </div>
                <div class="baseline">
                    <div class="baseline__title">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="baseline__description">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!--here we put the form container-->
        <div class="content__container">
            <div class="content__left scrollContent__anchor">
                <div class="content__title">
                    <h2>Conseils & Stratégie</h2>
                </div>
                <div class="content__description">
                   <p>Vous nous allouer un budget annuel et en fonction de vos gouts nous précédons à l'achat de vos vins 	
                    de la sélection à la livraison.<br>	 		
                    Voici un questionnaire pour connaître vos goûts.<br>
                    </p>
                    <div class="content__button">
                        <a href="#" class="brk-btn">RÉPONDRE AU QUESTIONNAIRE</a>
                    </div>
                </div>
            </div>
            <div class="content__right scrollImage__anchor">
                <img  src="../../assets/strat unplash.jpg"  alt="img">
            </div>
        </div>


        <div class="content__container">
            <div class="content__right">
                <img src="../../assets/achat vin.jpg" alt="img">
            </div>
            <div class="content__leftInverted scrollContent__anchor">
                <div class="content__title">
                    <h2>Achar Vin</h2>
                </div>
                <div class="content__description">
                    <P>
                        Vous recherchez un vin absent de notre site Faites nous part de votre recherche,<br> 
                        nous reviendrons vers vous pour vous dire si oui ou non nous pouvons le trouver sur le marché.
                    </P>

                    <div class="content__button">
                        <a href="/Mle20/public/contact/html/contact.html" class="brk-btn">CONTACTEZ-NOUS</a>
                    </div>

                </div>

            </div>
        </div>


         <div class="content__container">
            <div class="content__left scrollContent__anchor">
                <div class="content__title">
                    <h2>Audit Cave</h2>
                </div>
                <div class="content__description">
                   <p>
                    Nous étudions le contenu de votre cave, afin de la compléter sur listing il manque quoi vous avez besoin de quoi.<br>		
                    Vous nous transmettez un listing au format excel, nous étudions le contenu de votre cave.<br>		
                    Nous vous proposons un ajustement selon vos goûts et le manque que nous constatons.	
                   </p>
                </div>
            </div>
            <div class="content__right scrollImage__anchor">
                <img src="../../assets/cav vin unsplash.jpg" alt="img Cave">
            </div>
        </div>

        <div class="content__container">
            <div class="content__right">
                <img  src="../../assets/verre ecran.jpg"  alt="img exception">
            </div>
            <div class="content__leftInverted scrollContent__anchor">
                <div class="content__title">
                    <h2>Exception VIP</h2>
                </div>
                <div class="content__description">
                   <p>
                    Vous êtes un inconditionnel du château Margaux, du millésime 1995, des vieux champagnes ?<br>
                    Vous ne visez que le millésime 2001.<br>
                    Vous n'aimez que les grands contenants ? Jéroboam, Balthazar …<br>
                    Notre priorité est de vous satisfaire.
                   </p>
                </div>
            </div>
        </div>

        <div class="content__container">
            <div class="content__left scrollContent__anchor">
                <div class="content__title">
                    <h2>Vins & millésimes rares </h2>
                </div>
                <div class="content__description">
                    <P>
                    Nous recherchons la bouteille de vos rêves ...<br>
                    Les 20 ans de votre enfant, les 40 ans de votre ami(e), les 50 ans du parrain ....<br> 
                    Nous sommes à votre écoute pour vous aider à le dénicher.<br>
                    La traçabilité sera irréprochable, nous ne saurons vos proposer un flacon qui ne sera pas la hauteur de vos espérances.<br>
                    </P>
                </div>
            </div>
            <div class="content__right scrollImage__anchor">
                <img src="../../assets/Yquem bouteille unsplash.jpg" alt="img Yquem bouteille">
            </div>
        </div>


     </div>

     

</div>


</body>

<!--here we put the footer-->
<footer class="pageFooter">

    <div class="block_footer_left">

        <div class="legislation">
            <img id="legislationLogo" src="../../assets/Logo_de_la_Republique_française_(1999).svg.png" alt="Logo de la République française">
            <p id="law">L'abus d'alcool est dangereux pour la santé, consommez avec modération.</p>
        </div>

        <div class="newsletter">
            <p class="newsletter_title"> Newsletter</p>
            <div class="newsletter_input">
                <input type="email" placeholder="Email">
                <button>Valider</button>
            </div>
        </div>

    </div>


    <div class="footerColumn">
        <div class="Column_title">
            <p>À PROPOS DE M LE 20</p>
        </div>
        <div class="Column_content">
            <a><p>Notre histoire</p></a>
            <a><p>Demande de renseignements</p></a>
            <a><p>Plan du site</p></a>
        </div>
    </div>

    <div class="footerColumn">
        <div class="Column_title">
            <p>Boutique & Services</p>
        </div>
        <div class="Column_content">
            <a href="../../store/html/store.html"><p>Nos vins</p></a>
            <a><p>Parrainage & bons d'achats</p></a>
            <a href="#"><p>Espaces entreprise</p></a>
            <a href="../../Conciergerie/html/conciergerie.html"><p>Conciergerie</p></a>
            <a><p>Livraison</p></a>
            <a><p>Paiement</p></a>
        </div>
    </div>

    <div class="footerColumn">
        <div class="Column_title">
            <p>Juridique</p>
        </div>
        <div class="Column_content">
            <a href="#"><p>Conditions générales</p></a>
            <a href="#"><p>Mentions légales</p></a>
            <a href="#"><p>Confidentialité & Cookies</p></a>
            <a href="#"><p>Admin</p></a>
        </div>
    </div>

    <div class="footerColumn">
        <div class="Column_title">
            <p>Suivez-nous</p>
        </div>
        <div class="Column_content">
            <div class="Column_logo">
                <img class="footer_logo" src="../../assets/logo_facebook.png">
                <a>Facebook</a>
            </div>
            <div class="Column_logo">
                <img class="footer_logo" src="../../assets/logo_instagram.png">
                <a>Instagram</a>
            </div>
            <div class="Column_logo">
                <img class="footer_logo" src="../../assets/logo_linkedin.png">
                <a>Linkedin</a>
            </div>
            <div class="Column_logo">
                <img class="footer_logo"  src="../../assets/logo_twitter.png">
                <a>Twitter</a>
            </div>
        </div>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script type="text/javascript" src="../../contact/js/contact.js"></script>
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../element/js/slideshow.js"></script>


</html>