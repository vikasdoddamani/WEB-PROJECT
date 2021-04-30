<html><body>
<style>

body{
	
	background-image: url("ex.jpg");
	
}
}
</style>

<center>
<br><br>
<!--h1>HOTEL OBEROI</h1-->
</center>
<center><form action="removecustomer.php" method="post">
Policy_Number:<input type="text" name="Policy_Number">  <input type="submit"value="SUBMIT" name="submit" ><br></br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

<!--a href="main1.php"><font color="darkred" size="5px">GO TO MENU</font></a> </br></br-->

</form>

</body>
</html>

<?<?php ?>
include('../connection.php');
if(isset($_POST['submit'])){
	$Policy_Number=$_POST['Policy_Number'];
   
	
	$qry="DELETE FROM `policy_data` WHERE `Policy_Number`='$Policy_Number'";
$run= mysqli_query($conn,$sql);

	
if($run==true){
	echo "succesfully deleted agent details";
}
else{
	echo "not deleted";
}
}
?>