

<!-- Jake -->



<?php

$val = $_POST['val'];

$servername = "localhost";
$username = "jsphardw_admin";
$password = "pz-;Ry,ePd%W";
$dbname = "jsphardw_idkwhattoputhere";

$conn1 = new mysqli($servername, $username, $password, $dbname);
$conn2 = new mysqli($servername, $username, $password, $dbname);
$conn3 = new mysqli($servername, $username, $password, $dbname);
$conn4 = new mysqli($servername, $username, $password, $dbname);
$conn5 = new mysqli($servername, $username, $password, $dbname);
?>

<!doctype html>
<html>
    <head>
        <title>Product Count</title>
    </head>
    <style>

        h1 {
            justify-content: center;
        }
        #main_content {
        	margin-right: 2px;
        	width: 644px;
        	text-align: center;
        	float: center;
            justify-content: center;
        }

        #main_content .h_divider {
        	margin-bottom: 2px;
        	height: 1px;
        	background-color: #c2c2cd;
        	overflow: hidden;
        }

    </style>
    <body>

        <h1>Product Count By Department</h1>
  <div id="main_content" >

<?php
        $sql1 =("SELECT product_count('GPU') AS product_count");
        $sql2 =("SELECT product_count('CPU') AS product_count");
        $sql3 =("SELECT product_count('Monitor') AS product_count");
        $sql4 =("SELECT product_count('Memory') AS product_count");
        $sql5 =("SELECT product_count('Accessories') AS product_count");

        $result1 = $conn1->query($sql1);

        if ($result1->num_rows > 0) {
        $i = 0;
        while($row = $result1->fetch_assoc())
        {
            echo "<table border='.5'>";
            echo "<tr>";
            foreach ($row as $value) {
              echo "<td>" ."Product Count - GPU:   " . $value . "</td>";
            }
            echo "</tr>";

            echo "</table><br />";
        }
        } 
        else {
              echo "Error";
        }

        $conn1->close();

        // result 2 
        $result2 = $conn2->query($sql2);

        if ($result2->num_rows > 0) {
        $i = 0;
        while($row = $result2->fetch_assoc())
        {
            echo "<table border='.5'>";
            echo "<tr>";
            foreach ($row as $value) {
              echo "<td>" ."Product Count - CPU:   ". $value . "</td>";
            }
            echo "</tr>";

            echo "</table><br />";
        }
        } 
        else {
              echo "Error";
        }

        $conn2->close();

        // result 3 
        $result3 = $conn3->query($sql3);

        if ($result3->num_rows > 0) {
        $i = 0;
        while($row = $result3->fetch_assoc())
        {
            echo "<table border='.5'>";
            echo "<tr>";
            foreach ($row as $value) {
              echo "<td>"."Product Count - Monitor:   " . $value . "</td>";
            }
            echo "</tr>";

            echo "</table><br />";
        }
        } 
        else {
              echo "Error";
        }

        $conn3->close();

        // result 4 
        $result4 = $conn4->query($sql4);

        if ($result4->num_rows > 0) {
        $i = 0;
        while($row = $result4->fetch_assoc())
        {
            echo "<table border='.5'>";
            echo "<tr>";
            foreach ($row as $value) {
              echo "<td>"."Product Count - Memory:   " . $value . "</td>";
            }
            echo "</tr>";

            echo "</table><br />";
        }
        } 
        else {
              echo "Error";
        }

        $conn4->close();

        // result 5
        $result5 = $conn5->query($sql5);

        if ($result5->num_rows > 0) {
        $i = 0;
        while($row = $result5->fetch_assoc())
        {
            echo "<table border='.5'>";
            echo "<tr>";
            foreach ($row as $value) {
              echo "<td>" ."Product Count - Accessories:   ". $value . "</td>";
            }
            echo "</tr>";

            echo "</table><br />";
        }
        } 
        else {
              echo "Error";
        }

        $conn5->close();

?>
</div>

    </body>
</html>
