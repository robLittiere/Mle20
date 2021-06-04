<?php 
include "../../../connection.php";

$get_bottle = $conn->prepare("SELECT name, millennials, stock FROM product");
$get_bottle->execute();
$bottle = $get_bottle->fetchAll();

$get_users = $conn->prepare("SELECT name, surname, email, registration_date FROM User");
$get_users->execute();
$users = $get_users->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="../css/admin.css" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
    <header>
        <h2>Pannel admin</h2>
    </header>

    <div class="pannel_container">

        <div class="side_pannel">
            <h2>Produits</h2>
            <div class="pannel_product pannel">
                <?php for ($i=0; $i < $get_bottle->rowCount(); $i++) { ?>
                <div class="pannel_element">
                    <p><?php echo $bottle[$i]["name"] ?></p>
                    <p><?php echo $bottle[$i]["millennials"] ?></p>
                    <p>Stock: <?php echo $bottle[$i]["stock"] ?></p>
                    <span class="iconify" data-icon="carbon:add-filled" data-inline="false"></span>
                    <span class="iconify" data-icon="subway:subtraction" data-inline="false"></span>
                </div>
                <?php } ?>
            </div>
    
            <h2>Utilisateurs</h2>
            <div class="pannel_users pannel">
                <?php for ($i=0; $i < $get_users->rowCount(); $i++) { ?>
                <div class="pannel_element">
                    <p><?php echo $users[$i]["name"] ?></p>
                    <p><?php echo $users[$i]["surname"] ?></p>
                    <p><?php echo $users[$i]["email"] ?></p>
                    <p><?php echo $users[$i]["registration_date"] ?></p>
                </div>
                <?php } ?>
            </div>

        </div>

        <div class="side_pannel">
            
        </div>

    </div>
</body>
</html>