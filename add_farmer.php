<?php
//$f_id = $_GET['f_id'];
//$n_id = $_GET['n_id'];

include("connect.php");

$val_1 = $_GET['f_id'];
$val_2 = $_GET['n_id'];

$sql = "INSERT INTO farmer (farmer_id,node_id) VALUES ('$val_1','$val_2')";

if ($conn->query($sql) === TRUE) {
    echo "data Saved Successfully!";
} 
else 
    echo "Error:" . $sql . "<br>" . $conn->error;
$conn->close();
?>