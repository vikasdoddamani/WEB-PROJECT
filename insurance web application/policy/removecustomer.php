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
<center><form action="removepolicy.php" method="post">
POLICY_NUMBER:<input type="text" name="Policy_Number">  <input type="submit"value="SUBMIT" name="submit" ><br></br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

<!--a href="main1.php"><font color="darkred" size="5px">GO TO MENU</font></a> </br></br-->

</form>

</body>
</html>

<?php
include('../connection.php');
if(isset($_POST['submit'])){
	$Policy_Number=$_POST['Policy_Number'];
     
	 //DELETE FROM  `customer` WHERE `customer_id`='$customer_id' ON DELETE CASCADE;
	 //$qry="DELETE FROM bookings WHERE customer_id IN(SELECT customer_id FROM customer)";
	 //$qry=DELEE FROM customer;
	//$qry="DELETE FROM `food` WHERE `customer_id`='$customer_id'";
	
	//$qry3="DELETE FROM `customer` WHERE `customer_id`='$customer_id'";
	$qry1="DELETE FROM `policy_data` WHERE `Policy_Num`='$Policy_Number'";
	$run=mysqli_query($conn,$qry1);
	if($run==true){
	//echo "succesfully deleted payment details";?><br>
	
<?php
}
else{
	echo "not deleted";
}
	$qry2="DELETE FROM `policy_data` WHERE `Policy_Num`='$Policy_Number'";
	$run=mysqli_query($conn,$qry2);
	if($run==true){
	//echo "succesfully deleted bookings details";?><br>
	<?php
}
else{
	echo "not deleted";
}
	//$qry2="DELETE FROM `food` WHERE `customer_id`='$customer_id'";
	//$run=mysqli_query($con,$qry2);
	//if($run==true){
	//echo "succesfully deleted bookings details";?><br>
	
<?php
}
//else{
	//echo "not deleted";
//}
//$qry="DELETE FROM `customer` WHERE `Customer_Num`='$customer_id'";
 //$run=mysqli_query($conn,$qry);
 //if($run==true){
	//echo "succesfully deleted customer details";?><br>
	<!--a href="main1.php"><font color="darkred" size="5px">GO TO MENU</font></a> </br></br-->
<?php
//}
//else{
//	echo "not deleted";
//}



if($run==true){
	echo "succesfully deleted customer details";?><br>
	<a href="../home.php"><font color="darkred" size="5px">GO TO MENU</font></a> </br></br>
<?php
}
else{
	echo "not deleted";
}
	

?>