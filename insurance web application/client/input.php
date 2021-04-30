<?php
		include "../connection.php";
		$fn=$_POST['First_Name'];
		$mn=$_POST['Middle_Name'];
		$d=$_POST['DOB'];
		$ln=$_POST['Last_Name'];
		$g=$_POST['Gender'];
		$a=$_POST['Address'];
		$p=$_POST['Pincode'];
		$con=$_POST['Contact_Number'];
		$mon=$_POST['Mother_Name'];
		
		$fan=$_POST['Father_Name'];
		
		$s=$_POST['Nominee'];
		$query="insert into customer(First_Name,Middle_Name,Last_Name,Gender,DOB,Address,Pincode,Contact_Number, Mother_Name, Father_Name, Nominee) values('$fn','$mn','$ln','$g','$d','$a',$p,$con,'$mon','$fan','$s')";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>