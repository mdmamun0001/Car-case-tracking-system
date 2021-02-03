

<!DOCTYPE html>
<html>
<body>

<?php

include('connect.php');

// print_r($_POST);

//$Case_ID = $_POST["Case_ID"];
//$Case_Type_ID= $_POST['Case_Type_ID'];
//$Case_Date= $_POST['Case_Date'];
$Deadline= $_POST['Deadline'];
$Amount= $_POST['Amount'];
$Payment = $_POST['Payment'];
$Car_Number = $_POST['Car_Number'];
$Case_Type1= $_POST['Case_Type1'];
$Case_Type2 = $_POST['Case_Type2'];
$Case_Type3 = $_POST['Case_Type3'];
$Case_Type4 = $_POST['Case_Type4'];
$Case_Date=date("Y-m-d");
if( $Deadline!=""&&$Payment!=""&&$Car_Number!=""&&$Case_Type1!=""&&$Amount!="")
{




	$sql2 = "INSERT INTO case_details(Case_Date,Deadline,Amount,Payment,Car_Number,Type1,Type2,Type3,Type4)
	                             values ('".$Case_Date."','".$Deadline."', '".$Amount."' , '".$Payment."', '".$Car_Number."','".$Case_Type1."', '".$Case_Type2."', '".$Case_Type3."' , '".$Case_Type4."')";
	if ($con->query($sql2) == true)
	{
	    echo  "Success";
	}
	else
	{
	    echo "Fail try again .";
	   
	}

 
}
else {
	

	echo "Please insert full information";
}
$con->close();


?>
<br>
<br>
<button><a href="Case_Details.html">Back</a></button>
</body>
</html>