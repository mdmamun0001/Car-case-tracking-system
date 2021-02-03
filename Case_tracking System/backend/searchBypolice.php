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
<b>
<?php


include('connect.php');

$Car_Number = $_POST["Car_Number"];
$Type = $_POST["Type"];


if($Car_Number !="" and $Type!="")
{

$sql = "SELECT Case_ID, Case_Date FROM case_details where Car_Number like $Car_Number and ( $Type=Type1 or $Type=Type2 or $Type=Type3 or $Type=Type4 )  order by Case_Date DESC "; 
        
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Case ID</th><th>Case date</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Case_ID"]. "</td><td>" . $row["Case_Date"]. " ";
    }
    echo "</table>";
} else {
    echo "No Case for this law for the car ";
}

}
else{
	# code...
	echo "Insert car number and violated law properly ";
}

$con->close();
?>
<b>
<br>
<br>
<br>
<button><a href="policeHome.html">Back</a></button>
</body>
</html>