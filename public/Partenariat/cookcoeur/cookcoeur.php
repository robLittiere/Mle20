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
    <link rel="stylesheet" href="../cookcoeur/css/cookcoeur.css">
    <link rel="stylesheet" href="../cookcoeur/css/cookcoeurtitle.css">

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>CookCoeur</title>
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

    <!--here we put the global container for our page-->
    <div class="global__container">
        
        <div class="ckc__container">
            <div class="ckc__baseline">
                <h1>CookCoeur</h1>
            </div>
        </div>
        <div class="line1">
            <div class="content_logockc">
                <div class="block_logockc">

                    <div class="descript_logockc">

                        <div class="logockc">
                            <img src="../../assets/logoCookcoeur.png" alt="Logo CookCoeur">
                        </div>

                        <div class="ckc__container_logockc">
                            <div class="ckc__baseline_logockc">
                                <h2>Présentation</h2>
                            </div>
                        </div>
                        <p>
                        Cookcoeur c’est Jean-Philippe d’Hont, il est directeur artistique.<br>
                        Passionné de dessin depuis petit, il croque depuis toujours ce qui l’inspire.<br><br> 
                        Né dans une famille de boulanger pâtissier,<br> il s’amuse petit dans les coulisses de la pâtisserie familiale,<br>
                        formant ses sens aux odeurs gourmandes de brioche tiède ou de crème vanille <br> tout juste montée et remplissant ses yeux de ce travail artisanal.<br><br>
                        A travers ses créations, Cookcoeur met en valeur les talents de chefs pâtissiers tels que<br> Nicolas Bernardé, Yann Couvreur, Christophe Michalak,<br>
                        Bryan Esposito, Pierre Hermé, François Perret, Kevin Lacote ...<br> 
                        Son art nous permet d'entrer dans le monde des saveurs des chefs.<br><br>
                        Le site : <a href="https://www.cookcoeur.fr">CookCoeur</a>
                        </p>
                        <br><br>
            
                        <div class="perso1">
                            <img src="../../assets/persocook.jpeg"  alt="persocook">
                        </div>

                    </div>
                </div>
            </div>
                
            <div class="content_why">
                <div class="block_why">

                    <div class="descript_why">
                        <div class="ckc__container_why">
                            <div class="ckc__baseline_why">
                                <h2>Cookcoeur & M Le 20</h2>
                            </div>
                        </div>
                        <p>
                        L’Art de mettre en avant nos vignerons<br>
                        C’est à la fois une rencontre et la passion qui nous réunit sur ce projet.<br>
                        Nous avons imaginé que le talent de Cookceour pouvait magnifié un vin, un champagne, un accord gustatif.<br>
                        M Le 20 lui décrit le millésime, l’appellation, les couleurs, les odeurs, les saveurs…<br>
                        Cookcoeur illustre à travers son oeuvre toute la quintessence olfactive et gustative d’une cuvée.<br>
                        Nous pouvons imaginer<br>
                        <span>&#10148;</span> &nbsp Un vin, une aquarelle<br>
                        <span>&#10148;</span> &nbsp Une étiquette,  une aquarelle …<br>
                        et bien d’autres choses auxquelles vous penserez certainement<br><br>

                        </p>

                        <div class="cookbout">
                            <img src="../../assets/bouteillecook.png"  alt="boutcook">
                        </div>
                        <br>
            
                    </div>
                </div>
            </div>
        </div>
        <div class="content_mle20">
            <div class="block_mle20">
                <div class="descript_mle20">
                    <div class="persocook2">
                        <img src="../../assets/persocook2.jpeg"  alt="perso2">
                    </div>
                    <div class="ckc__container_mle20">
                        <div class="ckc__baseline_mle20">
                            <h2>Evénements Cookcoeur & M Le 20</h2>
                        </div>
                    </div>
                    <p>
                    Vins & Pâtisseries <br>
                    Nous imaginons des accords judicieux avec un grand chef pâtissier qui partage avec vous sa perception olfactive, <br>
                    ses émotions gustatives, ses sensations Champagne. <br> 
                    </p>
                    <div class="persocook3">
                        <img src="../../assets/persocook3.jpeg"  alt="perso3">
                    </div>
                    <br><br><br>
                    <p>
                    Mousse de nougat cœur de caramel déglacé au champagne et brisures de cacahuète, enrobage chocolat noir et pâte sucrée au cacao <br>
                    Un moment précieux, privilégié que le chef pâtissier n’accorde qu’exceptionnellement ! <br>
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

<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../element/js/account.js"></script>
<script type="text/javascript" src="../../element/js/cart.js"></script>



</html>