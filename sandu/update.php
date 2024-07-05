<?php

require 'config.php';

$ID=$_POST["did"];
$Name=$_POST["dname"];
$Specialization=$_POST["dspecialization"];
$Experience=$_POST["dexperience"];
$Email=$_POST["demail"];
$Contact=$_POST["dcontact"];



   $sql= "UPDATE doctor_details set Name='$Name', Specialization='$Specialization', Experience='$Experience', Email='$Email', Contact='$Contact' WHERE ID='$ID'";

    if($conn->query($sql))
    {
        echo '<script src="script/myscript.js"></script>';
        echo '<script>displayAlertRedirect("Succussfully Updated! Please login.", "read.php");</script>';
    }
    else{
        echo "Not Updated";
    }




?>