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
    <link rel="stylesheet" href="../css/about.css">

    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Qui sommes-nous ?</title>
</head>


<body>
    
    <!--here we put the header-->
    <div class="header__container">

        <!-- here is the top banner -->
        <?php 
            include "../../../public/element/php/top_banner.php";
            echo $header_banner;
        ?>

<<<<<<< Updated upstream:public/about/html/about.php
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
=======
        <div class="logo__container">
            <img id="logo" src="../../assets/logo.jpg" alt="logo">
            <h1>Champagnes, Vins & Events</h1>
            <h3>Expériences dédiées aux meilleurs vins</h3>
        </div>
        <div class="navbar">
            <div class="header_bottom">
                <a href="../../home/html/home.html" class="header__button">Accueil</a>
                <a href="../../degustationsExperience/html/degustationsExperience.html" id="experience__button" class="header__button">Degustations & Expériences</a>
                <a href="#" id="company__button" class="header__button">Espace Entreprise</a>
                <a href="../../Conciergerie/html/conciergerie.html" id="conciergerie__button" class="header__button">Conciergerie</a>
                <a href="../../Partenariat/Partenariat.html" id="partner__button" class="header__button">Partenaires</a>
                <a href="../../store/html/store.html" id="store__button" class="header__button">Boutique</a>
                <a href="about.html" id="infos__button" class="header__button">Qui sommes nous ?</a>
                <a href="../../contact/html/contact.html" id="contact__button" class="header__button">Contacts</a>
            </div>    


            <div id="store__popup">
                <a href="#" class="popup__button">Vin</a>
                <a href="#" class="popup__button">Champagne</a>
                <a href="#" class="popup__button">Coffret Cadeau</a>
                <a href="#" class="popup__button">Evenement</a>
                <a href="#" class="popup__button">Autres</a>
            
                
            </div>
            <div id="experience__popup">
                <a href="#" class="popup__button">Atelier dégustation</a>
                <a href="#" class="popup__button">Prestige</a>
                <a href="#" class="popup__button">Improbable</a>
                <a href="#" class="popup__button">Grands vins français</a>
                <a href="#" class="popup__button">Privatiser (sur mesure)</a>
                <a href="#" class="popup__button">Balades gustatives)</a>
                <a href="#" class="popup__button">Soirée</a>
                <a href="#" class="popup__button">Séminaire</a>
                <a href="#" class="popup__button">Demande de devis</a>
            </div>
            <div id="company__popup">
                <a href="#" class="popup__button">Idée cadeaux</a>
                <a href="#" class="popup__button">Pack entreprise</a>
                <a href="#" class="popup__button">Concept sur mesure</a>
                <a href="#" class="popup__button">Etude de faisabilité</a>
                <a href="#" class="popup__button">Voyage à thème : dégustation, gastronomie, sport</a>
                <a href="#" class="popup__button">Ils nous font confiance</a>
            </div>
            <div id="conciergerie__popup">
                <a href="#" class="popup__button">Conseil & Stratégie</a>
                <a href="#" class="popup__button">Achat vin</a>
                <a href="#" class="popup__button">Achat Primeur</a>
                <a href="#" class="popup__button">Audit Cave</a>
                <a href="#" class="popup__button">Expérience unique</a>
                <a href="#" class="popup__button">Expérience VIP</a>
                <a href="#" class="popup__button">Vins et millésimes rares</a>
>>>>>>> Stashed changes:public/about/html/about.html

    </div>   

    <!--here we put the global container for our page-->
    <div class="global__container">

        <div class="about__container">
            <div class="about__baseline">
                <h1>Qui sommes-nous ?</h1>
            </div>
        </div>

        <div class="item__container">
            <div class="description__container">
                <div class="description__title">
                    <h3>M le 20</h3>
                </div>
                <div class="description__text">
                        
                    <p>
                        L’histoire d’une amitié autour des meilleurs vins depuis plus de 25 ans.
                        Tout commence au détour d’un stage pour une grande école de commerce, PSB.
                        Un stage dédié à un club de vin « Cépages & Terroirs ».
                    </p>
                    <br />
                    <p>    
                        Nous n’étions pas tous sur l’activité mais l’aventure a commencée ainsi.
                        Elle n’a jamais cessé de se renforcer au fil du temps, rencontres, dégustations, découvertes de
                        vignerons pour notre plus grand plaisir …
                    </p>
                    <br />
                    <p>    
                        Nous avons des parcours professionnels proches pour certains et différents pour d’autres.
                        L’un des éléments fédérateurs à travers cette merveilleuse rencontre amicale est indéniablement
                        notre amour des grands vins, le partage, le respect et la bienveillance auprès des acteurs qui le font.
                    </p>

                </div>
    
            </div>

            <div class="image__container">
                <img id="image1" src="../../assets/about_images/dylan-gillis-KdeqA3aTnBY-unsplash.jpg" alt="Photo d'équipe">
                <img id="image2" src="../../assets/about_images/kelsey-chance-tAH2cA_BL5g-unsplash.jpg" alt="Photo d'équipe">
            </div>
            

        </div>
        
        <div class="comite_selection">

            <div class="about__container">
                <div class="about__baseline">
                    <h1>Comité de Sélection</h1>
                </div>
            </div>
    
            <div class="colaborateur_content">

                <div class="colaborateur">
                    <div class="description_right">
                        <p>
                            Experte en Vins & médias Communication & Développement 25 ans d’expérience, passionnée par l’univers du vin<br>
                            Bénédicte Sénéchal-Pauly est reconnue notamment pour avoir lancer le magnifique Salon de La Revue du Vin de France.<br>
                            Durant plus de 12 ans, elle a mené d’une main de maître ses différents événements. 24 événements majeurs (ou incontournables)<br>
                            orchestrés dans leur globalité de la conception à la réalisation. De Paris en passant par Bruxelles et Pékin. Une diversification<br>
                            de marque indispensable dans l’un des plus grands groupe de presse, orientée vers des salons, des week-ends VIP, mais également des<br>
                            dégustions prestigieuses dans les plus beaux établissements de la Capitale française et d’ailleurs. Au Palais Brongniart à Paris,<br>
                            en passant par Bruxelles, Pékin, lors de ces prestigieuses rencontres, plus de 250 vignerons, élite de la viticulture Française lui<br>
                            ont toujours accordé une confiance absolue et reconnu son professionnalisme. Au delà de cette légitimité elle a également œuvré sur<br>
                            des postes prestigieux chez Baron Philippe de Rothschild, Taillevent et enfin Lavinia
                        </p>
                    </div>

                    <div class="profile_colaborateur">
        
                        <div class="picture_profile_colaborateur">
                            <img src="../../assets/about_images/benedicte1.png" alt="Laurent Bernardi" class="picture_colaborateur">
                        </div>
        
                        <div class="profile_description">
                            <p>Bénédicte Pauly Sénéchal <br> Présidente, Fondatrice chez M LE 20 Wines & Events</p>
                        </div>
        
                    </div>
                </div>

                <div class="colaborateur">
                    <div class="profile_colaborateur">
        
                        <div class="picture_profile_colaborateur">
                            <img src="../../assets/about_images/colaborateur 1.jpg" alt="Stéphane Beaumont" class="picture_colaborateur">
                        </div>
        
                        <div class="profile_description">
                            <p>Stéphane Beaumont</p>
                        </div>
        
                    </div>
        
                    <div class="description_right">
                        <p>
                            Il se plaît à dire depuis des années qu’il n’aime pas les vins de cocktail ! <br>
                            C’est sa meilleure blague depuis …. <br>
                            Vous l’avez compris c’est le Bourguignon de l’équipe qui défend merveilleusement bien sa <br>
                            superbe région. Avec le temps, ses rencontres, sa passion, ses recherches avides de belles <br>
                            découvertes, il a su se laisser séduire par toutes nos régions. Son ouverture gustative nous <br>
                            épate chaque jour. Il est depuis 10 ans ambassadeur de Movember France pour lutter <br>
                            contre le cancer masculin. Il croit aux succès des valeurs humaines, aime le respect et le <br>
                            travail, si en plus il y a une touche de solidarité il prend la part des anges. <br>
                        </p>
                    </div>
                </div>

                <div class="colaborateur">
                    <div class="description_right">
                        <p>
                            Tout a commencé sur une Leoville Laz Cazesse, comprenez un Léovile Las Cases en Espagnole dans le texte.<br>
                            Il était au téléphone avec un fournisseur, un fou rire mémorable rien ne pouvait nous arrêter…<br>
                            Au fil du temps avec Vinisud, les Vignerons Indépendants,<br>
                            ses origines tourangelles, sa Bourguignonne d’épouse,<br>
                            il est l’homme de la passion, du partage,<br>
                            rien ne l’arrête dans ses recherches.<br>
                            Epicurien confirmé il sait mettre ses plats au service de vins de nos vignerons partenaires.<br>
                        </p>
                    </div>

                    <div class="profile_colaborateur">
        
                        <div class="picture_profile_colaborateur">
                            <img src="../../assets/about_images/colaborateur 3.jpg" alt="Laurent Bernardi" class="picture_colaborateur">
                        </div>
        
                        <div class="profile_description">
                            <p>Laurent Bernardi</p>
                        </div>
        
                    </div>
                </div>

                <div class="colaborateur">
                    <div class="profile_colaborateur">
        
                        <div class="picture_profile_colaborateur">
                            <img src="../../assets/about_images/colaborateur 2.jpg" alt="Patrick Maitrot" class="picture_colaborateur">
                        </div>
        
                        <div class="profile_description">
                            <p>Patrick Maitrot</p>
                        </div>
        
                    </div>
        
                    <div class="description_right">
                        <p>
                            Le plus éloigné de la première aventure et pourtant si proche.<br>
                            D’origine Normande, pas simple de revendiquer sa culture vineuse dans le groupe.<br>
                            C’est mal le connaître, sa légitimité est légendaire sur tout ce qu’il approche,<br>
                            il en est parfois fatiguant.<br>
                            Grâce à la transmission de son Papa il a découvert les contours Saint-Emilion et avec Beau Papa la subtilité de Pomerol.<br>
                            Tout commence ainsi, aujourd’hui il ne tient plus en place lors de la période des Primeurs <br>
                            et collectionne les GVF pour soutenir les vignerons. <br>
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

<script type="text/javascript" src="../../element/js/navbar.js"></script>
<script type="text/javascript" src="../js/about.js"></script>


</html>