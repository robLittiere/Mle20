<?php 
$account = <<<EOD
    <div id="account_slider">
        <div id="slider_header">
            <div id="close_btn">
                <p onclick="sliderAccount_hide()">X</p>
            </div>
            <a href="public/login/html/logIn.php" class="icon">
                <p>se connecter</p>
                <span class="iconify" data-icon="ant-design:login-outlined" data-inline="false" width="12%"></span>
            </a>
        </div>
        <div id="slider_profil">
            <div id="profil_picture">
                <img src="../../assets/bannerImage/account_noir.png" id="accountImg">
            </div>
            <div id="profil_username">
                <p>Nom d'utilisateur</p>
            </div>
        </div>
    </div>
EOD;
?>