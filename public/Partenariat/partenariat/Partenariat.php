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
    <link rel="stylesheet" href="../partenariat/css/Partenariat.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link href="../styles/Partenariat.css" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Mle20 Partenariat</title>
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
            include "../../../public/element/php/Logo.php";
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
                    <h1>PARTENARIAT</h1>
    
                </div>
                <div class="baseline">
                    <div class="baseline__title">
                        <p>Découvrez ici nos partenaires !</p>
                    </div>
                    <div class="baseline__description">
                        <p> 
                            Des partenaires qui ont toute notre confiance.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="partner_container">

            <figure id="movemberLogo" class="snip">
                <img src="../../assets/LogoMov.png" alt="logoMovember">
                <figcaption>
                    <h3>DoYouMovember</h3>
                    <div class="partenaireBtn">
                        <p>Cliquez ici pour en savoir plus</p>
                        <a href="../movember/movember.php"></a>
                    </div>
                </figcaption>
            </figure>

            <figure id="leoubeLogo" class="snip">
                <img src="../../assets/logoLeoube.png" alt="logoLeoube">
                <figcaption>
                    <h3>Château Léoube</h3>
                    <div class="partenaireBtn">
                        <p>Cliquez ici pour en savoir plus</p>
                        <a href="../chateauLeoube/chateauleoube.php"></a>
                    </div>
                </figcaption>
            </figure>

            <figure id="logoBulleDeLAube" class="snip">
                <img src="../../assets/bullesdelaube.png" alt="logoBulleDeLAube">
                <figcaption>
                    <h3>Bulle de l'aube</h3>
                    <div class="partenaireBtn">
                        <p>Cliquez ici pour en savoir plus</p>
                        <a href="../bulleDeLaube/bulleDeLAube.php"></a>
                    </div>
                </figcaption>
            </figure>

        </div>

        <div class="partner_container2">

            <figure id="logocookcoeur" class="snip">
                <img src="../../assets/logoCookcoeur.png" alt="logocookcoeur">
                <figcaption>
                    <h3>CookCoeur</h3>
                    <div class="partenaireBtn">
                        <p>Cliquez ici pour en savoir plus</p>
                        <a href="../cookcoeur/cookcoeur.php"></a>
                    </div>
                </figcaption>
            </figure>

            <figure id="logopatriwine" class="snip">
                <img src="../../assets/logoPatriwine.png" alt="logocpatriwine">
                <figcaption>
                    <h3>Patriwine</h3>
                    <div class="partenaireBtn">
                        <p>Cliquez ici pour en savoir plus</p>
                        <a href="../patriwine/patriwine.php"></a>
                    </div>
                </figcaption>
            </figure>

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
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../element/js/slideshow.js"></script>
<script type="text/javascript" src="../style_script/Partenariat.js"></script>


</html>