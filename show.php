<html>
<head>
<meta http-equiv="refresh" content="5">
</head> 
<body>
<?php
include("connect.php");

$sql = "SELECT * FROM `f_id`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table border='1'><th>ID</th><th>Data</th><th>blank</th>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		//echo "<td>".$row['id']."</td>";
		echo "<td>".$row['data']."</td>";
		//echo "<td>".$row['day']."</td>";
		echo "</tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>