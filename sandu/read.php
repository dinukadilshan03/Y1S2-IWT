<!DOCTYPE html>
<html>
<head>
    
    <title>Doc_Details</title>
    <link rel="stylesheet" type="text/css"  href="styles/style2.css">

</head>
<body>
    <div class="table-container">
<?php
require 'config.php';

$sql = "SELECT ID, Name, Specialization, Experience, Email, Contact FROM doctor_details";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table border='1'>"; // Corrected 'boder' to 'border'
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Name"] . "</td>" . "<td>" . $row["Specialization"] . "</td>" . "<td>" . $row["Experience"] . "</td>" . "<td>" . $row["Email"] . "</td>" . "<td>" . $row["Contact"] . "</td>"; // Fixed concatenation
        echo "</tr>"; // Added a semicolon
    }
    echo "</table>";
} else {
    echo "No Results";
}

$conn->close();

?>
</body>
</html>
