<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php


include('connect.php');

$Car_Number = $_POST["Car_Number"];

if($Car_Number!="")
{

$sql = "SELECT Case_ID, Case_Date,Deadline,Amount,Payment,Type1,Type2,Type3,Type4 FROM case_details where  case_details.Car_Number = $Car_Number   order by Case_Date DESC ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Case ID</th><th>Case date</th><th>deadline</th><th>Amount</th><th>Payment</th><th>Types </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Case_ID"]. "</td><td>" . $row["Case_Date"]. "</td><td>".$row["Deadline"]. "</td><td>". $row["Amount"]. "</td><td>" . $row["Payment"]. "</td> <td>".$row["Type1"]."</td><td>".$row["Type2"]."</td><td>".$row["Type3"]."</td><td>".$row["Type4"]."  ";
    }
   echo "</table>";
} else {
    echo "Not Found ";
}
}
else
{
echo "please insert Car Number";

}

$con->close();
?>
<br><br>

<button><a href="Admin.php">Back</a></button>
</body>
</html>