<?php

include'config.php';

$Cname=$_POST["client_name"];
$Cid=$_POST["client_id"];
$Cemail=$_POST["email"];
$Creports=$_POST["medical_reports"];
$Cphone=$_POST["phone_number"];



if(empty($Cname)||empty($Cid)||empty($Cemail)||empty($Creports)||empty($Cphone))
{
    echo "All Requiered!!";
}
else
{
    $sql = "INSERT INTO clientlist (`Client_Name`, `Client_Id`, `email`, `Medical_Details`, `Telephone`) VALUES ('$Cname', '$Cid', '$Cemail', '$Creports', '$Cphone')";
    
    if($con->query($sql))
    {
        echo '<script src="script/myscript.js"></script>';
        echo '<script>displayAlertRedirect("Successfully Created!", "read.php");</script>';
    }
    else
    {
        echo "Error!!".$con->error;
    }
}



$con->close();
?>