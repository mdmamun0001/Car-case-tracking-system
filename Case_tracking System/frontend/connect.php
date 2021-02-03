
<?php




    $serverName = 'localhost';
    $userName = 'root';
    $pass = '';
    $dbname = 'case_track';

    $con = new  mysqli($serverName,$userName,$pass,$dbname);

    if($con->connect_error){

        die("connect fail");
    }
    else
        echo " ";



?>

