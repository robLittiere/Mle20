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
    <link href="../css/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Mle20 Contact</title>
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
  

    <!--here we put the global contact container-->
     
    <div class="home__container">
        <div class="banner">
            <img src="../../assets/slider2.jpg" alt="photo verre">
        </div>  
        
        
        <div class="baseline__container">
            <div class="baseline__divider">
                <div class="small__title">
                    <h1>AIDE ET CONTACT</h1>
    
                </div>
                <div class="baseline">
                    <div class="baseline__title">
                        <p> Besoin d'aide envoyez-nous un message !</p>
                    </div>
                    <div class="baseline__description">
                        <p> Ci-dessous un formulaire de contact qu'il suffit de remplir et de nous envoyer en un clic.<br>
                        Nous Répondrons dans les plus brefs délais à votre demande.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!--here we put the form container-->
        <div id="formulaire"></div>
        <div class="content__container">
            <div class="content__left scrollContent__anchor">
                <div class="content__title">
                    <h2>FORMULAIRE</h2>
                </div>
                <div class="content__input">
                    <label for="fname">Nom</label>
                    <input type="text" id="fname" name="fname" value="">
                    <label for="lname">Prénom</label>
                    <input type="text" id="lname" name="lname" value="">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="">
                    <label for="mess">Message</label>
                    <textarea type="text" id="message" name="message" placeholder="Entrer votre message..."></textarea>
                </div>
                <div class="content__button">
                    <a href="#" class="brk-btn">ENVOYER VOTRE MESSAGE</a>
                </div>
            </div>
            <div class="content__right scrollImage__anchor">
                <img  src="../../assets/slider3.jpg"  alt="slider3">
            </div>
        </div>





        <div class="content__container">
            <div class="content__right">
                <img src="../../assets/ verre de champagne 3 unsplash.jpg" alt="imagechamp">
            </div>
            <div class="content__leftInverted scrollContent__anchor">
                <div class="content__title">
                    <h2>CONTACT</h2>
                </div>
                <div class="content__description">
                    <p>
                    Toute l'équipe de M LE 20.COM reste à votre disposition pour répondre à toutes vos questions.<br>
                    <br>
                    Du lundi au vendredi<br>
                    au &nbsp;&nbsp;06 98 74 61 40 <br>
                    <br>
                     Nous contactez par Email&nbsp;&nbsp;: <br>
                     mle20.contact@gmail.com
                    </p>
                </div>
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
            <a><p>Conciergerie</p></a>
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
<script type="text/javascript" src="../js/contact.js"></script>
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../element/js/slideshow.js"></script>


</html>