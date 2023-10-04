

<!-- Jake -->



<?php

$ID = $_POST['ID'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$dept = $_POST['dept'];

$servername = "localhost";
$username = "jsphardw_admin";
$password = "pz-;Ry,ePd%W";
$dbname = "jsphardw_idkwhattoputhere";

$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("INSERT INTO Product (Product_ID , Product_Name , Product_Description, Product_Price, Department_Name) VALUES (?,?,?,?,?)");

$stmt->bind_param("issis", $ID, $name, $desc, $price, $dept);

$stmt->execute();

$stmt->close();
$conn->close();

?>