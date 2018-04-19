<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="60">
<style>
table {
    border-collapse: collapse;
    width: 50%;
    margin:350px;
    }

th, td {
    text-align: left;
    padding: 8px;
    }

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
    }

body {margin:0;}


</style>
</head>
<body>
<div >

<?php
include("connect.php");
include("head.php");

$sql = "SELECT * FROM `nodes`";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    //echo "here";
    echo "<table><tr><th>farmer_id</th><th>node_id</th><th>Date/time</th><th>moisture</th><th>temperature</th><th>pressure</th>";
       while($row = $result->fetch_assoc())
        {

		    echo "<tr>";
		    echo "<td>".$row['f_id']."</td>";
		    echo "<td>".$row['node_id']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "<td>".$row['moisture']."</td>";
            echo "<td>".$row['temp']."</td>";
            echo "<td>".$row['press']."</td>";

            echo "</tr>";
        
        }    
	echo "</table>";
} 

else 
{
    echo "0 results";
}

$conn->close();

?>
</div>
</body>
</html>