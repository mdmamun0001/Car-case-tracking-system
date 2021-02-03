<!DOCTYPE html>
<html>
<body>
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
$Case_Date = $_POST["Case_Date"];
// $today=date("Y-m-d");



$sql = "SELECT Case_ID, Case_Date,Deadline,Amount,Payment,Type1,Type2,Type3,Type4 FROM case_details where Case_Date like '$Case_Date'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Case ID</th><th>Case date</th><th>deadline</th><th>Amount</th><th>Payment</th><th>Types </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["Case_ID"]. "</td><td>" . $row["Case_Date"]. "</td><td>".$row["Deadline"]. "</td><td>". $row["Amount"]. "</td><td>" . $row["Payment"]. "</td> <td>".$row["Type1"]."</td><td>".$row["Type2"]."</td><td>".$row["Type3"]."</td><td>".$row["Type4"]." ";
    }
    echo "</table>";
} else {
    echo "No case at the day";
}


$con->close();
?>





<br>
<br>
<button><a href="searchBydate.html">Back</a></button>





</body>
</html>