<html><body>
<head>
<title>
Insurance Management System
</title>
<nav> 
<ul>
	<li><a href="home.php"> <h3>Home</h3></a></li>
	<li><a href="login.php"><h3>Login</h3></a></li>
</ul> 
</nav> 
<link href = "policy/registration.css" type = "text/css" rel = "stylesheet" />  
<link href = "style.css" type = "text/css" rel = "stylesheet" /> 
</head>
<center>
<h1 style="color:orange; font-size:100px;">login </h1>
<form method="post" action="home.php">
<h1 style="color:red; font-size:35px;"> username:<input type="text" name="username" required> </h1<br>
<h1 style="color:red; font-size:35px;">password:<input type="password" name="password" required></h1<br>
<input type="submit" >
</center>
</form>

</body>
</html>
<?php

include('connection.php');
if(isset($_POST['submit'])){
$user=$_POST['username'];
$pass=$_POST['password'];/*
$qry="SELECT * FROM `admin` WHERE `username`='$user' and `password`='$pass'";
$run=mysqli_query($conn,$qry);
$row=mysqli_num_rows($run);	
if($row<1){?>
	<script>
	alert("password or user mis match");
	</script>
	<?php
}*/
if(!($user=='admin' && $pass=='pass')){
	echo "Incorrect Credentials";
	
}
else{
	session_start();
    $_SESSION['name']=$user;
	header('location:home.php');
}

}
?>