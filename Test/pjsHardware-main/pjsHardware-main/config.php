<?php



// Phillip 



/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ns1.byethost7.org');
define('DB_USERNAME', 'jsphardw_admin');
define('DB_PASSWORD', 'pz-;Ry,ePd%W');
define('DB_NAME', 'jsphardw_idkwhattoputhere');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>