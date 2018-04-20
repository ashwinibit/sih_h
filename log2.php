<?php 
//include 'head.php';

$link='header.php';




if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"demo");
    
    
    $result=mysqli_query($con,"select * from login where username='$username' and password='$password'");

  $n1 = mysqli_fetch_assoc($result);
	
		$user=$n1['username'];
		$pass=$n1['password'];
		
	if($username==$user && $pass==$password)
	{
	//echo "<a href=header.php >header Page</a>";
	//echo "welcome   $username<br>";
	//echo '<a href="header.php" target="_blank"></a>';
	//echo '<a href="index.php" class="btn btn-light">Register Here (???? ??????? ????)</a>';
	include 'head.php';
session_start();if(isset($_SESSION['user'])) header('Location: head.php');
exit();
	}
	else
		//echo "wrong username password";
	echo "<script type='text/javascript'>alert('incorrect username or password!')</script>";
	 echo '<a href="index.php" class="btn btn-light">Register Here (यहां रजिस्टर करें)</a>';
	// echo '<a href="index.php" class="btn btn-light">Register Here (???? ??????? ????)</a>';

    
        
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="loginBox" id="frm" class="container">
	<img src="mohit.jpg" class="user"/>
		<form method='post' >
			<div class="form-input">
				<input type="text" id="username" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" id="pass" name="password" placeholder="password"/>
			</div>
			<input type="submit" id="btn" value="LOGIN"/>
			 <a href="index.php" class="btn btn-light">Register Here (यहां रजिस्टर करें)</a>
			
		</form>
	</div>
</body>
</html>
