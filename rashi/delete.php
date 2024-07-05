<?php

require 'config.php';

$Id = $_POST["client_id"];

$sql= "DELETE FROM clientlist WHERE Client_Id='$Id'";

if($con->query($sql))
{
    echo '<script src="script/myscript.js"></script>';
    echo '<script>displayAlertRedirect("Successfully Deleted!", "read.php");</script>';
}
else
{
    echo "Not Deleted!!";
}


?>