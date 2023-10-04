

<!-- Jake -->



<?php

$val = $_POST['val'];

$servername = "localhost";
$username = "jsphardw_admin";
$password = "pz-;Ry,ePd%W";
$dbname = "jsphardw_idkwhattoputhere";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql =("SELECT * FROM Product");

$result = $conn->query($sql);
if ($result->num_rows > 0) {
$i = 0;
while($row = $result->fetch_assoc())
{
    echo "<table border='1'>";
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";

    echo "</table><br />";
}
} 
else {
      echo "Error";
}
$conn->close();

?>