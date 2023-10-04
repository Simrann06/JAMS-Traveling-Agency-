

<!-- Jake -->



<?php

$desc = $_POST['desc'];
$ProdID = $_POST['ProdID'];

$servername = "localhost";
$username = "jsphardw_admin";
$password = "pz-;Ry,ePd%W";
$dbname = "jsphardw_idkwhattoputhere";

$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("UPDATE Product SET Product_Description = ? WHERE Product_ID = ?");

$stmt->bind_param("si", $desc, $ProdID);

$stmt->execute();

$stmt->close();
$conn->close();

?>