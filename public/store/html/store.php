<?php
include "../../../connection.php";
$btl_nbr_check  = $conn->prepare("SELECT product_id FROM product");
$btl_nbr_check->execute();

$get_product = $conn->prepare("SELECT * FROM product");
$get_product->execute();
$product = $get_product->fetchAll();

?>
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
            <?php for ($i=0; $i < $btl_nbr_check->rowCount(); $i++) { ?>
                <div class="storeElement">

                    <div class="elementImg">
                        <img src="<?php echo $product[$i]["image"] ?>" class="image">

                        <div class="imageButton">
                            <a class="text">En savoir plus</a>
                        </div>
                    </div>

                    <div id="elementName" class="elementDescription">
                        <div class="elementName">
                            <p><?php echo $product[$i]["name"]." ".$product[$i]["format"] ?></p>
                        </div>

                        <div class="region">
                            <p>Côtes de Provence</p>
                        </div>

                        <div class="elementAppellation">
                            <p><?php echo $product[$i]["product_type"] ?></p>
                        </div>

                        <div id="elementVintage" class="elementVintage">
                            <p><?php echo $product[$i]["millennials"] ?></p>
                        </div>
                    </div>


                    <div id="elementPrice" class="elementPrice">
                        <a class="btn"><?php echo $product[$i]["prize_ATI"] ?>€ / Ajouter au panier</a>
                    </div>

                </div>
            <?php } ?>
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
