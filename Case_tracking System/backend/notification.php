<!DOCTYPE html>
<html>
<body>
<b>
<?php


include('connect.php');


session_start();
$Car_Number=$_SESSION['CarNumber'];

//echo "".$Car_Number."";

//$Car_Number = $_POST["Car_Number"];
 $today=date("Y-m-d");



$sql = "SELECT Case_ID, Case_Date,Deadline,Payment FROM case_details where case_details.Car_Number like $Car_Number ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())

     {
          
         $date1=date_create($row["Deadline"].""); 

          $date2=date_create($today."");

    	$dif = date_diff($date2,$date1);
      $days=$dif->format("%a");

     if (  $row["Payment"] != "Yes" ){
      	echo nl2br("\n");
        echo nl2br("Case Id  :  ".$row["Case_ID"]." \n Case Date  :  ". $row["Case_Date"]. "  \nDead line  : ".$row["Deadline"]." \n left ");
      	echo $dif->format("%R%a days");
       // echo "\n";

      }

    	

        
    }
    
} 


$con->close();
?>
</b>

<br>
<br>
<br>
<button><b><a href="User.html">Back</a></b></button>





</body>
</html>