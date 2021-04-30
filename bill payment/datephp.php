<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, rr_id, meter_no,account_id,address,state FROM electric_pay where account_id='$t1' AND date=''";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<body> <br> <hr> <br> ACCOUNT <br> <hr> <br> <center>";
    echo "<table border='5'> <tr> <th> NAME</th> <th> RR ID</th> <th>METER NUMBER</th><th>ACCOUNT ID</th><th> ADDRESS</th> <th>STATE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td> <td>".$row["rr_id"]."</td> <td>".$row["meter_no"]."</td> <td>".$row["account_id"]."</td> <td>".$row["address"]."</td> <td>".$row["state"]."</td> </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>