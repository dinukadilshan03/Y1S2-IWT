<?php

require 'config.php';

$Id = $_POST["client_id"];
$cname = $_POST["client_name"];
$cemail = $_POST["email"];
$creports = $_POST["medical_reports"];
$ctelephone = $_POST["phone_number"];

$sql="UPDATE clientlist SET Client_Name= '$cname', email= '$cemail',	Medical_Details= '$creports', Telephone= '$ctelephone' WHERE Client_Id= '$Id'";

if($con->query($sql))
{
    echo '<script src="script/myscript.js"></script>';
    echo '<script>displayAlertRedirect("Successfully Updated!", "read.php");</script>';
}

$con->close();

?>
