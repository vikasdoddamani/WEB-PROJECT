








<center><form action="remove.php" method="post">SEARCH STAFF
<input type="text" name="name" required>
<input type="submit" value="search" name="submit">
</form>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$qry="SELECT * FROM `staff` WHERE `worker_name`='$name'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1){
	echo "no data found";
	}
	else{?><table><tr><td>worker id</td><td>hotel id</td><td>worker name</td><td>worker phone</td><td>salary</td><td>date_of join</td><td>role</td></tr><?php
		while($data=mysqli_fetch_assoc($run)){?>
		<tr><td><?php	echo $data['worker_id']; ?></td>
		<td><?php	echo $data['hotel_id']; ?></td>
	
		<td><?php	echo $data['worker_name'];?></td>
		<td><?php	echo $data['worker_phone'];?></td>
		<td><?php	echo $data['salary'];?></td>
		<td><?php	echo $data['date_join'];?></td>
		<td><?php	echo $data['role'];?></td></tr>
		<td><a href="rem.php?wid=<?php echo $data['worker_id'];?>">remove</a></td></tr>
		
		<?php

	}?></table><?php
	
	
}
}
?>