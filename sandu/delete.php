<?php

require 'config.php';

$ID=$_POST["did"];


$sql="DELETE FROM doctor_details WHERE ID='$ID'";

if($conn->query($sql))
{
    echo '<script src="script/myscript.js"></script>';
    echo '<script>displayAlertRedirect("Successfully Deleted! Please login.", "read.php");</script>';
}
else
{
    echo "Not Success";
}



?>