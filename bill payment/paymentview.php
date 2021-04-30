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

$sql = "SELECTrr_id,date,amount,time,method,dd_number FROM electric_pay";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<body> <br> <hr> <br> PAYMENT HISTORY<br> <hr> <br> ";
    echo "<table border='5'> <tr> <th> RR ID</th> <th>DATE</th><th>AMOUNT</th><th> TIME </th> <th>PAYMENT METHOD</th> <th> DD NUMBER</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["rr_id"]."</td> <td>".$row["date"]."</td> <td>".$row["amount"]."</td> <td>".$row["time"]."</td> <td>".$row["method"]."</td> <td>".$row["dd_number"]."</td> </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>