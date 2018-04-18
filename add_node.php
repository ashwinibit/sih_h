<?php

$n_id = $_GET['n_id'];
$temp = $_GET['temp'];
$pres = $_GET['pres'];
$moist = $_GET['moist'];
include("connect.php");

$val_1 = $_GET['n_id'];
$val_2 = $_GET['temp'];
$val_3 = $_GET['pres'];
$val_4 = $_GET['moist'];
$sql = "INSERT INTO `nodes` (`node_id`, `temp`, `pres`, `moist`)  VALUES ('$val_1','$val_2','$val_3','$val_4')";
if ($conn->query($sql) === TRUE) {
    echo "data Saved Successfully!";
} 
else 
    echo "Error:" . $sql . "<br>" . $conn->error;
$conn->close();
?>