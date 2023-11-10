<?php



// Malik 



/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$dbhost = "localhost";
$dbbuser = "root";
$dbpass "";
$dbname "JAMS";
 
/* Attempt to connect to MySQL database */
if(!$con = mysqli_connect($dbhost,$dbbuser,$dbpass,$dbname))
 
{
    die("ERROR: Could not connect!");
}
?>