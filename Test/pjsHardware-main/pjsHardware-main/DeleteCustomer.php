<?php




// Jake 




$val = $_POST['val'];

$servername = "localhost";
$username = "jsphardw_admin";
$password = "pz-;Ry,ePd%W";
$dbname = "jsphardw_idkwhattoputhere";

$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("DELETE FROM Customer WHERE Customer_ID = ?");

$stmt->bind_param("i", $val);

$stmt->execute();

$stmt->close();
$conn->close();

?>