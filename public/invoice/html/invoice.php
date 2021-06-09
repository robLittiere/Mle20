<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <link rel="stylesheet" href="../css/invoice.css">
</head>
<body>

    <header>

        <div id="titleHeader">
            <h2>Facture n°JJMMAAAA-X</h2>
        </div>

    </header>
    
    <div class="invoice_container">

        <div class="informations">
            <div class="date_information">

                <p>
                    Date de facture : <?php echo strftime("%A %d %B %G", strtotime($date1)); ?> <br>
                    Date de commande : <?php echo strftime("%A %d %B %G", strtotime($date1)); ?> <br>
                </p>        
            </div>
            <div class="mle20_information">
                
                <div class="mle20_text">
                    <h3>M Le 20</h3>
                    <p>
                        <br>
                        <br>
                        <br>
                        Tél: <br>
                        Mail: <br> 
                        <br>
                    </p>
                </div>
                <div class="logo">
                    <img class="logo_image" src="../../assets/LogoMle20.png" alt="logo M Le 20">
                </div>
            </div>
        </div>
        <div class="borderContainer">
            <div class="border"></div>
        </div>
    </div>
    <div id="container">
        <?php/* if ($_SESSION["delivery"] == "yes") { */?>

        <div id="deliveryAdresseContainer">
            <div id="deliveryAdresse"> 

                <p id="deliveryAdresseTitle"> Adresse de livraison </p>

                <div id="deliveryAdresseP"> 
                    <p> <?php echo $_SESSION["deliveryName"]; ?> <?php echo $_SESSION["deliverySurname"]; ?> </p>
                    <p> <?php echo $_SESSION["deliveryCity"]; ?> <?php echo $_SESSION["deliveryAdresse"]; ?> </p>
                    <p> <?php echo $_SESSION["deliveryEmail"]; ?> <?php echo $_SESSION["phoneNumber"]; ?> </p>
                    <p> <?php echo $_SESSION["deliveryComplement"]; ?> </p>
                </div>

            </div>
        </div>

        <?php/* } */?>

        <div id="buyerAdresseContainer">

            <div id="buyerAdresse"> 

                <p id="buyerAdresseTitle"> Adresse de facturation </p>

                <div id="buyerAdresseP"> 
                    <p> <?php echo $_SESSION["userSurname"]; ?> <?php echo $_SESSION["userName"]; ?> </p>
                    <p> <?php echo $_SESSION["userCity"]; ?> <?php echo $_SESSION["userAdresse"]; ?> </p>
                    <p> <?php echo $_SESSION["userCity"]; ?> </p>
                </div>

            </div>

        </div>
    </div>

    <div class="wrapper">

        <div class="recapContainer" >
            <p class="recapTitle">Nb de caisse(s)</p>

            <div class="recapContain">
                <p> <?php echo $_SESSION[""] ?> </p>
            </div>
        </div>

        <div class="recapContainer" >
            <p class="recapTitle">Nom du vin</p>

            <div class="recapContainT">
                <p> <?php echo $_SESSION[""] ?> </p>
            </div>
        </div>

        <div class="recapContainer" >
            <p class="recapTitle">Nb de bouteilles</p>

            <div class="recapContain1">
                <p> <?php echo $_SESSION[""] ?> </p>
            </div>
        </div>

        <div class="recapContainer" >
            <p class="recapTitle">Prix unitaire</p>

            <div class="recapContain2">
                <p> <?php echo $_SESSION[""] ?> €</p>
            </div>
        </div>

        <div class="recapContainer" >
            <p class="recapTitle">Total</p>

            <div class="recapContain3">
                <p> <?php echo $_SESSION[""] ?> €</p>
            </div>
        </div>

    </div>

    <div class="border"></div>

    <div id="totalContainer">

        <div class="totalContain"> <p> Total de la commande </p> </div>
        <div class="totalContain"> <p> <?php echo $_SESSION["totalWine"] ?> €</p> </div>
        <div class="totalContain"> <p> Frais de port </p> </div>
        <div class="totalContain"> <p> <?php echo $_SESSION["totalDeliveryPrize"] ?> €</p> </div>
        <div class="totalContain"> <p> Net à payer </p> </div>
        <div class="totalContain"> <p> <?php echo $_SESSION["total"] ?> €</p> </div>
    
    </div>

</body>
</html>