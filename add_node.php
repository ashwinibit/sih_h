<?php

$f_id = $_GET['f_id'];
$node_id = $_GET['node_id'];
$temp = $_GET['temp'];
$pres = $_GET['pres'];
$moist = $_GET['moist'];
include("connect.php");
$val_0 = $_GET['f_id'];
$val_1 = $_GET['node_id'];
$val_2 = $_GET['temp'];
$val_3 = $_GET['pres'];
$val_4 = $_GET['moist'];
$sql = "INSERT INTO `nodes` (`f_id`, `node_id` , `moisture`, `temp`, `press`) VALUES  ('$val_0','$val_1','$val_2','$val_3','$val_4')";
if ($conn->query($sql) === TRUE) {
    echo "data Saved Successfully!";
} 
else 
    echo "Error:" . $sql . "<br>" . $conn->error;
$conn->close();
?>