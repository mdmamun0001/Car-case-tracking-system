
<!DOCTYPE html>
<html>
<body>


<?php
include('connect.php');


// print_r($_POST);

$Name = $_POST["Name"];
$ID= $_POST['ID'];
$Password= $_POST['Password'];
$Car_Number= $_POST['Car_Number'];

if($Name!=""&&$ID!=""&&$Password!=""&&$Car_Number!="")
{

	$sql = "INSERT INTO users(Name,ID,Password,Car_Number)
	                             values ('".$Name."','".$ID."','".$Password."','".$Car_Number."')";

	if ($con->query($sql) === true)
	{
	    echo  "Sign Up sucess";
	    
	}
	else
	{
	    echo "fail please again Do sign Up";
	 
	}
	//$con->close();

}
else
{
	echo "plz fill up all Information ";
}
?>
  <a href="createAcount.html"> Back </a>

 </body>
</html>