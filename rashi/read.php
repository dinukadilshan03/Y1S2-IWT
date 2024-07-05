<html>
<head>
    <title>ClientList</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<div class="table-container">
<h2 align="center">Client List</h2>
<?php

    require 'config.php';

    $sql = "SELECT  Client_Name, Client_Id, email, Medical_Details, Telephone FROM clientlist";

    $result = $con->query($sql);

    if($result->num_rows>0)
    {
        echo"<table border='1'>";
        echo "<tr><th>Client Name</th><th>Client ID</th><th>Email</th><th>Medical Details</th><th>Telephone</th></tr>";
        
        while($row = $result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["Client_Name"]."</td>"."<td>".$row["Client_Id"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Medical_Details"]."</td>"."<td>".$row["Telephone"]."</td>";
            echo "</tr>";
        }
        echo"</table>";
    }
    else
    {
        echo "No results!!";
    }

    $con->close();

?>
</body>

</html>