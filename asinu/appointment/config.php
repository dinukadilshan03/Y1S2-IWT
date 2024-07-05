<?php

$con=new mysqli("localhost","root","","smartdoc");
  
if($con->connect_error){
    die("connection failed".$con->connect_error);
}


?>
