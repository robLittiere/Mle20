<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../element/css/navbar.css">
    <link rel="stylesheet" href="../../element/css/footer.css">
    <link rel="stylesheet" href="../css/logIn.css">
    <link rel="stylesheet" href="../../element/css/banner.css">
    <script src="../js/logIn.js"></script>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
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

    </div>

    <form>
        <div id="form_outline">

            <div id="form_title">
                <div id="title_outline">
                    <h3>Inscription</h3>
                </div>
            </div>

            <div id="form_contain">

                <div id="input_container">
                    <input class="input" placeholder="Nom">
                    <input class="input" placeholder="Prénom">
                    <input class="input" type="email" placeholder="Email">
                    <input class="input" type="password" placeholder="password">

                    <p class="input_title">Date de naissance</p>
                    <div id="birthday_input">
                        <input id="day" class="input bd" type="number" min="01" max="31" onchange="fixValue()" placeholder="Mois">
                        <input id="month" class="input bd" type="month">
                        <span class="button">S'inscrire</span>
                    </div>
                </div>

            </div>

        </div>
    </form>

    <!--here we put the footer-->
<?php 
    include "../../../public/element/php/footer.php"; 
    echo $footer;
?>
    
</body>
</html>