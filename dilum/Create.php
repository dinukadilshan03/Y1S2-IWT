<html>
    <head>
    </head>
    <body>
        <?php

            require 'config.php';

            $clientFName = $_POST["cFname"];
            $clientLName = $_POST["cLname"];
            $clientEmail = $_POST["cEmail"];
            $clientMsg = $_POST["message"];
            $status = $_POST["status"];

            $data = "INSERT INTO client VALUES('','$clientFName','$clientLName','$clientEmail','$clientMsg','$status')";

            if($connection->query($data))
            {
                echo "<script> alert('Inserted successfully')</script>";
                echo "<script>location.href = 'Read.php'</script>";
            }
            else{
                echo "Error".$connection.error;
            }

            $connection->close();

        ?>
    </body>
</html>