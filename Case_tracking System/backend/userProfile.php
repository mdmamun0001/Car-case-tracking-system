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

session_start();
$User_Id = $_SESSION['User_Id'];




$sql = "SELECT * FROM users where users.ID = '".$User_Id."'";

$result = $con->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

        echo nl2br(" Name   :  ".$row["Name"]." \n\n Email :  ". $row["ID"]. " \n \n Password : ".$row["Password"]." \n\n Car Number :  ".$row["Car_Number"]."\n\n");
    }



$con->close();
?>
</b>

<b>
<button> <a href="User.html">Back</a> </button>
</b>
</body>
</html>