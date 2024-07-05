<?php

            require 'config.php';

            $ID = $_POST["cID"];
            $Status = $_POST["status"];

            $sql = "UPDATE client set Status='$Status' WHERE ID = '$ID'";

            if($connection->query($sql))
            {
                echo "<script>alert('Updated Successfully')</script>";
                echo "<script>location.href='Read.php'</script>";
            }
            else{
                echo "Not Updated";
            }

            $connection->close();

        ?>