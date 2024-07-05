<?php
require 'config.php';
if(isset($_POST['submit'])){
$fullname = $_POST["Name"];
$gender = $_POST["gender"];
$contact = $_POST["contact"];
$dob = $_POST["dateofbirth"];
$email = $_POST["email"];
$procedure_type = $_POST["ptype"];
$appointment_datetime = $_POST["appointment_datetime"];


$sql = "INSERT INTO appointment (FullName,Gender,ContactNumber,DateOfBirth,Email,Procedure_type,appointment_Datetime) VALUES ('$fullname', '$gender', '$contact', '$dob', '$email', '$procedure_type', '$appointment_datetime')";

if ($con->query($sql)) {
    //header("Location: read.php?msg=Data updated successfully");
    echo '<script>alert("Appointment created successfully.");</script>';
    echo '<script>location.href = "read.php";</script>';
  

} else {
    echo "Error: " . $con->error;
}
}
$con->close();
?>
