<?php
require 'config.php';
    $id=$_GET['deleteid'];



$sql="DELETE FROM appointment WHERE TokenID=$id";

if($con->query($sql)){
    echo"deleted successfull";
    header('location:read.php');
}else{
    die(mysqli_error($con));
}
?>

