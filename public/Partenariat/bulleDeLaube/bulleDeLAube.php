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
    <link rel="stylesheet" href="../bulleDeLaube/css/bulleDeLAube.css">
    <link rel="stylesheet" href="../bulleDeLaube/css/bulleDeLAubetitle.css">

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Bulles de l'Aube</title>
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

    <!--here we put the global container for our page-->
    <div class="global__container">
        
        <div class="bda__container">
            <div class="bda__baseline">
                <h1>Bulles de l'Aube</h1>
            </div>
        </div>
        <div class="line1">
            <div class="content_logoBda">
                <div class="block_logoBda">

                    <div class="descript_logoBda">
                        <div class="logobda">
                            <img src="../../assets/bullesdelaube.png" alt="Logo Bulles de l'Aube">
                        </div>

                        <div class="bda__container_logoBda">
                            <div class="bda__baseline_logoBda">
                                <h2>Présentation</h2>
                            </div>
                        </div>
                        <p>
                            La meilleure sélection de Champagnes en direct des producteurs<br><br>
                            “A l’aube naissent de délicieuses bulles qui reposent tranquillement pour offrir des champagnes aux meilleurs prix.”<br><br>
                            Équilibre, histoire, régularité et implication à l’image des 4 grandes Maisons: Devaux, Drappier, De barfontarc & Boulachin-Chaput, avec qui elles avancent chaque jour sont leur leitmotiv…<br><br>

                        </p>
                    </div>
                </div>
            </div>
                
            <div class="content_why">
                <div class="block_why">

                    <div class="descript_why">
                        <div class="logoWhy">
                            <img src=""  alt="">
                        </div>
            
                        <div class="bda__container_why">
                            <div class="bda__baseline_why">
                                <h2>Pourquoi eux ?</h2>
                            </div>
                        </div>
                        <p>
                            Contrairement à d’autres boutiques en ligne qui proposent des dizaines de références, Bulles de l’Aube a choisi de se différencier en sélectionnant des maisons de champagne de la Côte des Bar pour la qualité constante de leurs produits. Les grands guides confirment d’ailleurs cette sélection avec de nombreuses cuvées récompensées.<br>
                            Autre gage de qualité : tous les champagnes disponibles sur bullesdelaube.com sont expédiés par les producteurs eux-mêmes, directement de leur cave à votre table, ce qui garantit une qualité maximale (pas de stockage en entrepôt, pas d’écarts de température…).<br><br>
                            Bulles de l'Aube vous propose des nouvelles cuvées, des conseils, des champagnes en promotion tout au long de l'année
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_mle20">
            <div class="block_mle20">
                <div class="descript_mle20">
                    <div class="mle20_picture">
                        <img src="" alt="">
                    </div>
                    <div class="bda__container_mle20">
                        <div class="bda__baseline_mle20">
                            <h2>Bulles de l'Aube & M Le 20</h2>
                        </div>
                    </div>
                    <p>
                        Partenaire & Associées depuis novembre 2009. Une rencontre sous le signe de la bienveillance, du respect et de l’amitié. C'est à dire si ce lien qui nous uni est solide ! Trois filles de vin passionnées par les champagnes Aubois. Cette région champenoise plus confidentielle, que nous aimons tout particulièrement.<br>
                        Nous mettons tout en œuvre pour la mettre en avant et ainsi partager les pépites découvertes lors de nos dégustations.<br>
                        Notre objectif commun vous faire découvrir toute la subtilité du Pinot noir et les différentes interprétations des Maison que nous réprésentons.<br>
                    </p>
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

<script type="text/javascript" src="../element/js/navbar.js"></script>

</html>