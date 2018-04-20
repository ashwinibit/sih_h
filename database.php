<?php
$connect=mysqli_connect('localhost','root','','register');
echo "succesfully registered    ";

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>