<?php
$temp = $_GET['temp'];

include("connect.php");

$val = $_GET['temp'];

$sql = "INSERT INTO `data` (`data`) VALUES ('$val')";

if ($conn->query($sql) === TRUE) {
    echo "data Saved Successfully!";
} 
else 
    echo "Error:" . $sql . "<br>" . $conn->error;
$conn->close();
?>