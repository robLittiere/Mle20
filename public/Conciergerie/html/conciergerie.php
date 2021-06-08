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
  

    <!--here we put the global contact container-->
     
    <div class="home__container">
        
        <div class="baseline__container">
            <div class="baseline__divider">
                <div class="small__title">
                    <h1>CONCIERGERIE</h1>
    
                </div>
                <div class="baseline">
                    <div class="baseline__title"> 
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
                   <p>  M Le 20 se charge de tout pour vous.<br>
                        Sélection, achat, livraison dans votre cave.<br>
                        Vous nous allouer un budget, en fonction de<br>
                        <span>&#10003;</span> &nbsp  vos goûts<br>
                        <span>&#10003;</span> &nbsp  vos directives<br>
                        <span>&#10003;</span> &nbsp  vos choix<br>
                        Nous faisons le reste selon vos envies.
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
                    <h2>Achat Vin</h2>
                </div>
                <div class="content__description">
                    <P>
                    Vous recherchez un vin absent de notre boutique …<br>
                    Faites-nous part de votre recherche.<br> 
                    L’équipe M Le 20 étudie le marché,<br> afin de trouver votre pépite, le vin de vos rêves.
                    </P>

                    <div class="content__button">
                        <a href="../../contact/html/contact.php" class="brk-btn">CONTACTEZ-NOUS</a>
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
                    Nous étudions votre cave et vous aidons à la constituer.<br>
                    Nous équilibrons, ajustons pour que la partition soit parfaite.
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
                    <h2>Évenements VIP</h2>
                </div>
                <div class="content__description">
                   <p>
                    Vous rêvez de déguster, découvrir le …<br>
                    <span>&#10003;</span> &nbsp Château Margaux<br>
                    <span>&#10003;</span> &nbsp  Millésime 2005<br> 
                    Vous avez une passion pour les …<br>
                    <span>&#10003;</span> &nbsp  Grands contenants, Jéroboam, Balthazar<br>
                    <span>&#10003;</span> &nbsp  Vieux champagnes<br>
                    Notre priorité, toujours mieux satisfaire.<br>

                   </p>
                </div>
            </div>
        </div>

        <div class="content__container">
            <div class="content__left scrollContent__anchor">
                <div class="content__title">
                    <h2>Éxpérience unique</h2>
                </div>
                <div class="content__description">
                    <P>
                    Dégustez, découvrez, partagez<br>
                    <span>&#10003;</span> &nbsp Trois millésimes du château …<br>
                    <span>&#10003;</span> &nbsp Cinq vins de l’appellation Saint-Julien<br>
                    <span>&#10003;</span> &nbsp Evolution d’un millésime<br>
                    Autant de thèmes gustatifs que nous pouvons imaginer avec vous 

                    </P>
                </div>
            </div>
            <div class="content__right scrollImage__anchor">
                <img src="../../assets/vin rouge allonger-unsplash.jpg" alt="img vin allonger">
            </div>
        </div>

        <div class="content__container">
            <div class="content__right">
                <img  src="../../assets/Yquem bouteille unsplash.jpg"  alt="img Yquem bouteille ">
            </div>
            <div class="content__leftInverted scrollContent__anchor">
                <div class="content__title">
                    <h2>Vins & Millésimes rares</h2>
                </div>
                <div class="content__description">
                   <p>
                    A chaque fête sa bouteille …<br> 
                    Nous recherchons les bouteilles pour vos événements<br>
                    <span>&#10003;</span> &nbsp 20 ans de votre enfant<br>
                    <span>&#10003;</span> &nbsp 40 ans de votre ami(e)<br>
                    <span>&#10003;</span> &nbsp 50 ans du parrain<br>
                    <span>&#10003;</span> &nbsp A vous d’imaginer la suite …<br>
                    Nous sommes à votre écoute pour vous aider à dénicher la perle rare.
                   </p>
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
<script type="text/javascript" src="../../element/js/account.js"></script>
<script type="text/javascript" src="../../element/js/cart.js"></script>
<script type="text/javascript" src="../../contact/js/contact.js"></script>
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../element/js/slideshow.js"></script>


</html>