<?php
$servername = "localhost";
$username = "id16938452_killian";
$password = "uBZR9CX/9xgO&v0t";
$database = "id16938452_mle20";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
?>