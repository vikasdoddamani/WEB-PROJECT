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

$sql = "SELECT rr_id,date,time,amount,method,dd_number FROM electric_pay where rr_id='$t1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<body > <br> <hr> <br><center> <h1> Last PAyment MethoD <h1><br> <hr> <br> ";
    echo "<center><table border='5'> <tr> <th> rr_id</th> <th>date</th><th>time</th><th> amount</th> <th>method</th> <th>dd_number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["rr_id"]."</td> <td>".$row["date"]."</td> <td>".$row["time"]."</td> <td>".$row["amount"]."</td> <td>".$row["method"]."</td> <td>".$row["dd_number"]."</td> </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>