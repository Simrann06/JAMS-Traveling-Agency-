

<!-- Jake -->



<?php

$attribute1Man = $_POST['attribute1'];
$value1Man = $_POST['value1'];
$attribute2Man = $_POST['attribute2'];
$value2Man = $_POST['value2'];


$con=mysqli_connect("ns1.byethost7.org","jsphardw_manager","zl4.N@_rF@Qe","jsphardw_idkwhattoputhere");

mysqli_query($con,"UPDATE Product SET $attribute1Man = $value1Man WHERE $attribute2Man = $value2Man;");

?>