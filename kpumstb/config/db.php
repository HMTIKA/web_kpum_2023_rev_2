<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kpumstb";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
} 
else {
    // echo "Successfullly to connect database";
}
