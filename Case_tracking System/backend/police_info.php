

<!DOCTYPE html>
<html>
<body>
<b>
<?php




 include('connect.php');
   // print_r($_POST);

$Name = $_POST["Name"];
$Police_ID= $_POST['Police_ID'];
$Password= $_POST['Password'];
$Type= $_POST['Type'];

if($Name!="" and $Police_ID!="" and $Password!="" and  $Type!="")
{

$sql = "INSERT INTO users(Name,ID,Password,Type)
                             values ('".$Name."','".$Police_ID."','".$Password."','".$Type."')";

if ($con->query($sql) === true)
    echo  "Sign Up success";
else
    echo "Fail to  Sign Up .Please Sign Up with diffrent Email Id";

 // <a href="Admin.html">Back</a>
//$con->close();

}
else
{

	echo " Please fill up all information";
}
?>
</b>
<br>
<br>
  <button><a href="police_info.html">Back</a></button>

<body>
<html>