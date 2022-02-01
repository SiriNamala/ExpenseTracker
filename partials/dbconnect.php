<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "expenseTracker";
$table ="userdata";

$conn = mysqli_connect($server, $username, $password, $database);
if($conn){
    echo "";
}
else die("Error: ".mysqli_connect_error());
