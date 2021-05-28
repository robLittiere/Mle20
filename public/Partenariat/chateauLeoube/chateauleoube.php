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
    <link rel="stylesheet" href="../chateauLeoube/css/chateauleoube.css">
    <link rel="stylesheet" href="../chateauLeoube/css/chateauleoubetitle.css">

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Château Léoube</title>
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

    <!--here we put the global container for our page-->
    <div class="global__container">
        
        <div class="chl__container">
            <div class="chl__baseline">
                <h1>Château Léoube</h1>
            </div>
        </div>
        <div class="line1">
            <div class="content_logochl">
                <div class="block_logochl">

                    <div class="descript_logochl">
                        <div class="logochl">
                            <img src="../../assets/logoLeoube.png" alt="Logo Château Léoube">
                        </div>

                        <div class="chl__container_logochl">
                            <div class="chl__baseline_logochl">
                                <h2>Présentation</h2>
                            </div>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.  deserunt necessitatibus nam ullam perferendis natus atque.<br><br>
                            Rem optio aliquid odio, voluptatem ipsa, quidem inventore pariatur animi at distinctio obcaecati modi cupiditate,<br><br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique ipsa, quibusdam non architecto dignissimos asperiores consequatur laudantium.<br>

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
            
                        <div class="chl__container_why">
                            <div class="chl__baseline_why">
                                <h2>Pourquoi eux ?</h2>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quia, maxime sint accusamus autem nesciunt cumque, sunt explicabo ullam neque pariatur libero corrupti excepturi, odit iste temporibus illo necessitatibus mollitia!<br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dignissimos alias cum rerum.<br><br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam vel nobis nesciunt repellat ipsum officiis deserunt aperiam quis, corrupti dicta ea soluta perspiciatis quibusdam quas debitis, veritatis quaerat saepe! Nisi.
                            Rem optio aliquid odio, voluptatem ipsa.Rem optio aliquid odio, voluptatem ipsa.
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
                    <div class="chl__container_mle20">
                        <div class="chl__baseline_mle20">
                            <h2>Château Léoube & M Le 20</h2>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi libero id placeat ullam. Eius, deserunt nostrum! Temporibus expedita repudiandae officiis illo cum ex corporis. Perferendis maxime error qui laboriosam sapiente.<br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.Rem optio aliquid odio, voluptatem ipsa, quidem inventore pariatur animi at distinctio obcaecati modi cupiditate.<br>
                        Rem optio aliquid odio, voluptatem ipsa, quidem inventore pariatur animi at distinctio obcaecati modi cupiditate.<br>
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


</html>