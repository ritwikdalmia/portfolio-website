<?php
$server = "localhost";
$username = "u687107812_CBPI";
$password = "Cbpi123!";
$database = "u687107812_CBPI";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>