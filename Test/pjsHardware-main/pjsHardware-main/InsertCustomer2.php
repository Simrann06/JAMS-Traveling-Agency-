<?php

$ID = rand(100000, 999999);
$items = $_POST['items'];
$array = explode(',', $items);
$orderSize = sizeof($array);

function UserTable($ID)
{
    // Sanitize input and create needed variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addr = $_POST['addr'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $state = $_POST['state'];
    $card_name = $_POST['card_name'];
    $card_num = $_POST['card_num'];
    $Exp_month = $_POST['Exp_month'];
    $Exp_year = $_POST['Exp_year'];
    $cvv = $_POST['cvv'];

    // Load database configuration from SQLTools connection
    $sqlToolsConfig = [
        "server" => "localhost",
        "port" => 3306,
        "database" => "JAMS",
        "username" => "sqluser",
        "password" => "Pa$$w0rd"
    ];

    // Initialize connections
    $conn = new mysqli(
        $sqlToolsConfig["server"],
        $sqlToolsConfig["username"],
        $sqlToolsConfig["password"],
        $sqlToolsConfig["database"],
        $sqlToolsConfig["port"]
    );

    $conn->autocommit(FALSE);

    // Create user statement
    $Stmt1 = $conn->prepare("INSERT INTO users (username, password, email, first_name, last_name, date_created) VALUES (?,?,?,?,?,?)");

    // Assuming username, password, and email can be mapped from the existing variables
    $Stmt1->bind_param("ssssss", $name, $card_num, $email, $name, $name, date("Y-m-d H:i:s"));

    $Stmt1->execute();

    $conn->autocommit(true);

    $conn->close();
}

UserTable($ID);
include 'DeleteObjectAdmin.php';

echo "<script>alert('Your Order Has Been Submitted');</script>";

?>
