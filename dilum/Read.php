<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Support Details</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='styles/dbody.css'>
        <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <style>
            button{
                background-color: lightblue;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 10px;
                margin-left: 100px;
            }
            updateButton:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <script src="script/Script.js"></script>
        <br><br><hr><br><br>

        <h1 align="center">Contact Us</h1><br><br>
       
        <?php

        require 'config.php';

        $data = "SELECT ID, FName, LName, Email, Message, Status FROM client";

        $result = $connection -> query($data);

        if($result -> num_rows > 0)
        {
            echo "<table border='1' width='83%' style='margin-left: 100px; background-color: #d1a969;'>";
            echo "<th style='background-color: #f4c6b2;'>ID</th>"."<th style='background-color: #f4c6b2;'>First Name</th>"."<th style='background-color: #f4c6b2;'>Last Name</th>"."<th style='background-color: #f4c6b2;'>Email</th>"."<th style='background-color: #f4c6b2;'>Message</th>"."<th style='background-color: #f4c6b2;'>Status</th>";
            while($row = $result -> fetch_assoc())
            {
                echo "<tr>";
                echo "<td align='center' style='background-color: #fffef2'>".$row["ID"]."</td>"."<td align='center' style='background-color: #fffef2'>".$row["FName"]."</td>"."<td align='center' style='background-color: #fffef2'>".$row["LName"]."</td>"."<td align='center' style='background-color: #fffef2'>".$row["Email"]."</td>"."<td align='center' style='background-color: #fffef2'>".$row["Message"]."</td>"."<td align='center' style='background-color: #fffef2'>".$row["Status"]."</td>";
                echo "</tr>";
            }
            echo "</table><br><br><hr><br>";
        }
        else{
            echo "No Result";
        }

        $connection->close();

        ?>
        
        <button><a href="UpPage.php">Update</button>
    </body>
</html>