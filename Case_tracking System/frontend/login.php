<?php

include('connect.php');

session_start();


//print_r($_SESSION);


$User_Id = $_GET['User_Id'];
$Password = $_GET['Password'];



   $sql = "SELECT * FROM users where  ID = '".$User_Id."' and Password = '".$Password."' ";
  //echo $sql;
   //echo "$sql";
   $result = $con->query($sql);




    if ($result->num_rows > 0){

       $row = $result->fetch_assoc();

        //print_r($row);
       $_SESSION['User_Id'] = $row['ID'];
        $_SESSION['Password'] = $row['Password'];
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['Type'] = $row['Type'];
        $_SESSION['CarNumber'] = $row['Car_Number'];
        
          // print_r($_SESSION);
       


        if($row['Type']==0) {

           header('Location: User.html' );
        }

        else if($row['Type']==1){

            header('Location: policeHome.html' );

        }
        else
        {
              header('Location: admin.php' ); 

        }




      
    }
    else
       header('Location: loginagain.html' ); 



?>
