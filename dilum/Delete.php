<?php

    require 'config.php';

    $ID = $_POST["cID"];

    $sql = "DELETE FROM client WHERE ID = '$ID'";

    if($connection->query($sql)){
        echo "<script>alert('Data Deleted Successfully')</script>";
        echo "<script>location.href = 'Read.php'</script>";
    }
    else{
        echo "Not Deleted";
    }

?>