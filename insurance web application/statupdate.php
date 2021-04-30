<?php
include('connection.php');
    $date=date("d/m/Y");
	$count=0;
	$data1=0;
$qry="SELECT * FROM `policy_data` where `DOC`='$date' ";
$run=mysqli_query($conn,$qry);

	while($data=mysqli_fetch_assoc($run))
	{
		$data1=$data1+$data['Policy_Num'];
		$count=$count+1;
	}


	$qry="UPDATE `summary` SET `date`='$date',`No_Of_Policy`='$count' WHERE `date`='$date'";
	$run=mysqli_query($conn,$qry);

/*---------------------------------------------------------------------*/

$qry="INSERT INTO `summary` VALUES ('$date','$count')";
$run1=mysqli_query($conn,$qry);



?><center><font color="red" size="8"><?php
//echo "$date,$countap,$countam,$countbp,$countbm,$countop,$countom,$countabp,$countabm";
echo "summery updated";?></font></center>
	<a href="home.php"><font color="blue"><-back</a><?php
?>
