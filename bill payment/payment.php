<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bill";

$t2=$_REQUEST['t2'];
$t3=$_REQUEST['t3'];
$t4=$_REQUEST['t4'];
$t5=$_REQUEST['t5'];
$t6=$_REQUEST['t6'];
$t7=$_REQUEST['t7'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO electric_pay (rr_id,date,time,amount,method,dd_number)
VALUES ('$t2','$t3','$t4','$t5','$t6','$7')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>