<?php




// Jake 




$items = $_POST['items'];

$servername = "localhost";
$username = "jsphardw_admin";
$password = "pz-;Ry,ePd%W";
$dbname = "jsphardw_idkwhattoputhere";

$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("DELETE FROM Product WHERE Product_ID = ?");

$stmt->bind_param("i", $items);

$stmt->execute();

$stmt->close();
$conn->close();

?>