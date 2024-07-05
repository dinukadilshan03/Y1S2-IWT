<?php

require 'config.php';

$ID=$_POST["did"];
$Name=$_POST["dname"];
$Specialization=$_POST["dspecialization"];
$Experience=$_POST["dexperience"];
$Email=$_POST["demail"];
$Contact_No=$_POST["dcontact"];

$sql="INSERT INTO doctor_details VALUES ('$ID','$Name','$Specialization','$Experience','$Email','$Contact_No')";

if($conn->query($sql))
{
    echo '<script src="script/myscript.js"></script>';
    echo '<script>displayAlertRedirect("Registration successful! Please login.", "read.php");</script>';
}
else{
    echo "Error".$conn->error;
}

$conn->close();

?>