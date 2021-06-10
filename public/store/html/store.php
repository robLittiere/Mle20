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

    <?php if (isset($_GET['pop-up'])) { $i = $_GET["pop-up"] ?>
    <div id="popup">
        <div class="popupContent">
            <div class="popup_img_container">
                <img src="<?php echo $product[$i]["image"] ?>">
            </div>

            <div class="popup_description_container">
                <div class="popup_description">
                    <div id="popupTextName">
                        <p><?php echo $product[$i]["name"]." ".$product[$i]["format"] ?></p>
                    </div>

                    <div id="popupTextDescription">
                        <p>
                            <?php echo $product[$i]["product_type"] ?>
                        </p>
                    </div>
                </div>

                <div class="popup_btn">
                    <a id="popupBtn" href="store.php">fermer</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

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

    <!--here we put the store container-->
    <div id="store_grid">
        <?php for ($i=0; $i < $btl_nbr_check->rowCount(); $i++) { ?>
        <div class="item">
            <div class="item_img">
                <img src="<?php echo $product[$i]["image"] ?>">
                <div class="img-overlay">
                    <a class="btn btn-md btn-success" href="store.php?pop-up=<?php echo $i ?>">En savoir plus</a>
                </div>
            </div>
            <div class="item_text">
                <p><?php echo $product[$i]["name"]." ".$product[$i]["format"] ?></p>
                <p>Côtes de Provence</p>
                <p><?php echo $product[$i]["product_type"] ?></p>
                <p><?php echo $product[$i]["millennials"] ?></p>
            </div>
            <div id="elementPrice" class="elementPrice">
                <a class="prize_btn"><?php echo $product[$i]["prize_ATI"] ?>€ / Ajouter au panier</a>
            </div>
        </div>
        <?php } ?>
    </div>

</body>
<!--here we put the footer-->
<?php 
include "../../../public/element/php/footer.php"; 
echo $footer;
?>


<script type="text/javascript" src="../js/store.js"></script>
<script type="text/javascript" src="../../element/js/account.js"></script>
<script type="text/javascript" src="../../element/js/cart.js"></script>
<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../../home/js/homeScroll.js"></script>

</html>
