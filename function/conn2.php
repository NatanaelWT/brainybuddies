<?php
$servername = "localhost";
$database = "u803311289_brainybuddies";
$username = "u803311289_Website";
$password = "@Nigo0ichi";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
// mysqli_close($conn);