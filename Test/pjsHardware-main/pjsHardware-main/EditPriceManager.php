

<!-- Jake -->



<?php

$price = $_POST['price'];
$ProdID = $_POST['ProdID'];

$servername = "localhost";
$username = "jsphardw_manager";
$password = "zl4.N@_rF@Qe";
$dbname = "jsphardw_idkwhattoputhere";

$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("UPDATE Product SET Product_Price = ? WHERE Product_ID = ?");

$stmt->bind_param("ii", $price, $ProdID);

$stmt->execute();

$stmt->close();
$conn->close();

?>