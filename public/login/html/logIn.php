<?php 
include "../../../connection.php";
$date = date('d-m-y');
$error1 = "";
$error2 = "";

if (isset($_POST["birth_day"]) || isset($_POST["birth_month_year"])) {
    $full_birth_day = $_POST["birth_month_year"]."-".$_POST["birth_day"];
}

if (isset($_POST["city"]) || isset($_POST["adresse"])) {
    $adresse = $_POST["city"]." ".$_POST["adresse"];
}

if (isset($_POST["password1"]) || isset($_POST["password2"])) {

    if ($_POST["password1"] == $_POST["password2"]) {
        $pseudocheck = $conn->prepare("SELECT name FROM User WHERE name = :name");
        $mailcheck = $conn->prepare("SELECT email FROM User WHERE email = :email");
        $pseudocheck->bindParam(':name', $_POST["name"]);
        $mailcheck->bindParam(':email', $_POST["email"]);
        $pseudocheck->execute();
        $mailcheck->execute(); 

        if($pseudocheck->rowCount() > 0 || $mailcheck->rowCount() > 0){
            if ($pseudocheck->rowCount() > 0) {
                $error2 = "Ce Nom de compte existe déjà";

            } elseif ($mailcheck->rowCount() > 0) {
                $error2 = "Ce mail est déjà utilisé";
            }
            header("Location:../../../index.html");
        
        } else {
            //Securly insert into database
            $sql = 'INSERT INTO User (name, surname, email, password, birthday, adresse, phone_number, registration_date) VALUES (:name, :surname, :email, :password, :birthday, :adresse, :phone_number, :registration_date)';    
            $insert = $conn->prepare($sql);
        
            $insert->execute(array(
    
            ':name' => $_POST["name"],
            ':surname' => $_POST["surname"],
            ':email' => $_POST["email"],
            ':password' => $_POST["password1"],
            ':birthday' => $full_birth_day,
            ':adresse' => $adresse,
            ':phone_number' => $_POST["phone_number"],
            ':registration_date' => $date
            ));

            header("Location:../Homepage/index.html");
        }
    }
}   
?>

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

    </div>

    <form action="logIn.php" method="POST">
        <div id="form_outline">

            <div id="form_title">
                <div id="title_outline">
                    <h3>Inscription</h3>
                </div>
            </div>

            <div id="form_contain">

                <div id="input_container">
                    <p class="error_message"><?php echo $error2 ?></p>
                    <input name="name" class="input" placeholder="Nom" required>
                    <input name="surname" class="input" placeholder="Prénom" required>
                    <input name="email" class="input" type="email" placeholder="Email" required>
                    <input name="city" class="input" placeholder="Ville" required>
                    <input name="adresse" class="input" placeholder="Adresse" required>
                    <input name="phone_number" class="input" type="tel" placeholder="Numéro de téléphone" pattern="[0-9]{10}" required>
                    <p class="error_message"><?php echo $error1 ?></p>
                    <input name="password1" class="input" type="password" placeholder="mots de passe" required>
                    <input name="password2" class="input" type="password" placeholder="confirmer le mots de passe" required>
                    <p class="input_title">Date de naissance</p>
                    <div id="birthday_input">
                        <input name="birth_day" id="day" class="input bd" type="number" min="01" max="31" onchange="fixValue()" placeholder="Mois" required>
                        <input name="birth_month_year" id="month" class="input bd" type="month" required>
                        <button class="button">S'inscrire</button>
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
<script type="text/javascript" src="../../element/js/account.js"></script>
<script type="text/javascript" src="../../element/js/cart.js"></script>
</body>
</html>