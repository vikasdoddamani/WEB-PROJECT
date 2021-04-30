<html><body>


<center>

<h1>DELETE CUSTOMER INFORMATION</h1><br><br>

<form action="deletea.php" method="post">
AGENT_CODE:<input type="text" name="Agent_code"><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit"value="SUBMIT" name="submit" ><br><br>


<a href="agent.php"><font color="black">BACK</font></a>
</form>
</center>
</body>
</html>

<?php
include('../connection.php');
if(isset($_POST['submit'])){
	$Agent_code=$_POST['Agent_code'];
   
	
	$qry="DELETE FROM `agent` WHERE `Agent_code`='$Agent_code'";
$run=mysqli_query($con,$qry);

	
if($run==true){
	echo "succesfully deleted agent details";
}
else{
	echo "not deleted";
}
}
?>