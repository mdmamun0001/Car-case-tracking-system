<!DOCTYPE html>
<html>
<body>

<?php


include('connect.php');
//$Car_Number = $_POST["Car_Number"];
 $today=date("Y-m-d");



$sql = "SELECT Case_ID, Case_Date,Deadline,Amount,Payment,Type1,Type2,Type3,Type4 FROM case_details,case_type where  case_details.Case_Type like case_type.Case_Type_ID and  case_details.Case_Date like '$today'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Case ID</th><th>Case date</th><th>deadline</th><th>Amount</th><th>Payment</th><th>Types </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Case_ID"]. "</td><td>" . $row["Case_Date"]. "</td><td>".$row["Deadline"]. "</td><td>". $row["Amount"]. "</td><td>" . $row["Payment"]. "</td> <td>".$row["Type1"]."</td><td>".$row["Type2"]."</td><td>".$row["Type3"]."</td><td>".$row["Type4"]."  ";
    }
    echo "</table>";
} else {
    echo "No case Today";
}


$con->close();
?>



<h1><a href="Admin.php">Back</a></h1>





</body>
</html>